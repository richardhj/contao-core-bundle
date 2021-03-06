<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Tests\Contao;

use Contao\CoreBundle\Tests\TestCase;
use Contao\File;
use Contao\GdImage;
use Contao\System;

/**
 * @group contao3
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class GdImageTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        \define('TL_ROOT', $this->getTempDir());

        System::setContainer($this->mockContainer($this->getTempDir()));
    }

    /**
     * @group legacy
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testCanBeInstantiated(): void
    {
        $resource = imagecreate(1, 1);
        $image = new GdImage($resource);

        $this->assertInstanceOf('Contao\GdImage', $image);
        $this->assertSame($resource, $image->getResource());
    }

    /**
     * @group legacy
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testCreatesImagesFromDimensions(): void
    {
        $image = GdImage::fromDimensions(100, 100);

        $this->assertInternalType('resource', $image->getResource());
        $this->assertTrue(imageistruecolor($image->getResource()));
        $this->assertSame(100, imagesx($image->getResource()));
        $this->assertSame(100, imagesy($image->getResource()));

        $this->assertSame(
            127,
            imagecolorsforindex($image->getResource(), imagecolorat($image->getResource(), 0, 0))['alpha'],
            'Image should be transparent'
        );

        $this->assertSame(
            127,
            imagecolorsforindex($image->getResource(), imagecolorat($image->getResource(), 99, 99))['alpha'],
            'Image should be transparent'
        );
    }

    /**
     * @param string $type
     *
     * @group legacy
     *
     * @dataProvider getImageTypes
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testCreatesImagesFromFiles(string $type): void
    {
        $image = imagecreatetruecolor(100, 100);
        imagefill($image, 0, 0, imagecolorallocatealpha($image, 0, 0, 0, 0));

        $method = 'image'.$type;
        $method($image, $this->getTempDir().'/test.'.$type);
        imagedestroy($image);

        $image = GdImage::fromFile(new File('test.'.$type));

        $this->assertInternalType('resource', $image->getResource());
        $this->assertSame(100, imagesx($image->getResource()));
        $this->assertSame(100, imagesy($image->getResource()));
    }

    /**
     * @param string $type
     *
     * @group legacy
     *
     * @dataProvider getImageTypes
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testSavesImagesToFiles(string $type): void
    {
        $file = $this->getTempDir().'/test.'.$type;

        $image = GdImage::fromDimensions(100, 100);
        $image->saveToFile($file);

        $this->assertFileExists($file);

        $finfo = new \finfo(FILEINFO_MIME_TYPE);

        $this->assertSame('image/'.$type, $finfo->file($file));
    }

    /**
     * @return array
     */
    public function getImageTypes(): array
    {
        return [
            ['gif'],
            ['jpeg'],
            ['png'],
        ];
    }

    /**
     * @group legacy
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testFailsIfTheFileTypeIsInvalid(): void
    {
        $this->expectException('InvalidArgumentException');

        GdImage::fromFile(new File('test.xyz'));
    }

    /**
     * @group legacy
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testCopiesImages(): void
    {
        $image = imagecreatetruecolor(100, 100);

        // Whole image black
        imagefill($image, 0, 0, imagecolorallocatealpha($image, 0, 0, 0, 0));

        $image = new GdImage($image);
        $target = GdImage::fromDimensions(100, 100);

        $image->copyTo($target, 10, 10, 80, 80);

        $this->assertSame(
            ['red' => 0, 'green' => 0, 'blue' => 0, 'alpha' => 0],
            imagecolorsforindex($target->getResource(), imagecolorat($target->getResource(), 50, 50)),
            'Center should be black'
        );

        $this->assertSame(
            ['red' => 0, 'green' => 0, 'blue' => 0, 'alpha' => 0],
            imagecolorsforindex($target->getResource(), imagecolorat($target->getResource(), 10, 10)),
            '10 pixel from left top should be black'
        );

        $this->assertSame(
            ['red' => 0, 'green' => 0, 'blue' => 0, 'alpha' => 0],
            imagecolorsforindex($target->getResource(), imagecolorat($target->getResource(), 89, 89)),
            '10 pixel from right bottom should be black'
        );

        $this->assertSame(
            127,
            imagecolorsforindex($target->getResource(), imagecolorat($target->getResource(), 0, 0))['alpha'],
            'Left top pixel should be transparent'
        );

        $this->assertSame(
            127,
            imagecolorsforindex($target->getResource(), imagecolorat($target->getResource(), 99, 99))['alpha'],
            'Bottom right pixel should be transparent'
        );

        $this->assertSame(
            127,
            imagecolorsforindex($target->getResource(), imagecolorat($target->getResource(), 9, 9))['alpha'],
            '9 pixel from left top should be transparent'
        );

        $this->assertSame(
            127,
            imagecolorsforindex($target->getResource(), imagecolorat($target->getResource(), 90, 90))['alpha'],
            '9 pixel from bottom right should be transparent'
        );
    }

    /**
     * @group legacy
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testConvertsImagesToPaletteImages(): void
    {
        $image = imagecreatetruecolor(100, 100);

        // Whole image black
        imagefill($image, 0, 0, imagecolorallocatealpha($image, 0, 0, 0, 0));

        // Bottom right 25% transparent
        imagealphablending($image, false);
        imagefilledrectangle($image, 50, 50, 100, 100, imagecolorallocatealpha($image, 0, 0, 0, 127));

        $image = new GdImage($image);
        $image->convertToPaletteImage();

        $this->assertInternalType('resource', $image->getResource());
        $this->assertFalse(imageistruecolor($image->getResource()));

        $this->assertSame(
            ['red' => 0, 'green' => 0, 'blue' => 0, 'alpha' => 0],
            imagecolorsforindex($image->getResource(), imagecolorat($image->getResource(), 0, 0)),
            'Left top pixel should be black'
        );

        $this->assertSame(
            127,
            imagecolorsforindex($image->getResource(), imagecolorat($image->getResource(), 75, 75))['alpha'],
            'Bottom right quater should be transparent'
        );
    }

    /**
     * @group legacy
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testConvertsTrueColorImagesToPaletteImages(): void
    {
        $image = imagecreatetruecolor(100, 100);

        for ($x = 0; $x < 100; ++$x) {
            for ($y = 0; $y < 100; ++$y) {
                imagefilledrectangle($image, $x, $y, $x + 1, $y + 1, imagecolorallocatealpha($image, $x, $y, 0, 0));
            }
        }

        // Bottom right pixel transparent
        imagealphablending($image, false);
        imagefilledrectangle($image, 99, 99, 100, 100, imagecolorallocatealpha($image, 0, 0, 0, 127));

        $image = new GdImage($image);
        $image->convertToPaletteImage();

        $this->assertInternalType('resource', $image->getResource());
        $this->assertFalse(imageistruecolor($image->getResource()));
        $this->assertSame(256, imagecolorstotal($image->getResource()));

        $this->assertSame(
            127,
            imagecolorsforindex($image->getResource(), imagecolorat($image->getResource(), 99, 99))['alpha'],
            'Bottom right pixel should be transparent'
        );
    }

    /**
     * @group legacy
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testCountsTheImageColors(): void
    {
        $image = imagecreatetruecolor(100, 100);
        imagealphablending($image, false);

        imagefill($image, 0, 0, imagecolorallocatealpha($image, 255, 0, 0, 0));
        imagefilledrectangle($image, 50, 0, 100, 50, imagecolorallocatealpha($image, 0, 255, 0, 0));
        imagefilledrectangle($image, 0, 50, 50, 100, imagecolorallocatealpha($image, 0, 0, 255, 0));
        imagefilledrectangle($image, 50, 50, 100, 100, imagecolorallocatealpha($image, 0, 0, 0, 127));

        $image = new GdImage($image);

        $this->assertSame(4, $image->countColors());
        $this->assertSame(4, $image->countColors(256));
        $this->assertSame(2, $image->countColors(1));
    }

    /**
     * @group legacy
     *
     * @expectedDeprecation Using the Contao\GdImage class has been deprecated %s.
     */
    public function testRecognizesSemitransparentImages(): void
    {
        $image = imagecreatetruecolor(100, 100);
        imagealphablending($image, false);

        $image = new GdImage($image);

        imagefill($image->getResource(), 0, 0, imagecolorallocatealpha($image->getResource(), 0, 0, 0, 0));
        $this->assertFalse($image->isSemitransparent());

        imagefill($image->getResource(), 0, 0, imagecolorallocatealpha($image->getResource(), 0, 0, 0, 127));
        $this->assertFalse($image->isSemitransparent());

        imagefill($image->getResource(), 0, 0, imagecolorallocatealpha($image->getResource(), 0, 0, 0, 126));
        $this->assertTrue($image->isSemitransparent());

        imagefill($image->getResource(), 0, 0, imagecolorallocatealpha($image->getResource(), 0, 0, 0, 1));
        $this->assertTrue($image->isSemitransparent());

        imagefill($image->getResource(), 0, 0, imagecolorallocatealpha($image->getResource(), 0, 0, 0, 0));
        $this->assertFalse($image->isSemitransparent());
    }
}
