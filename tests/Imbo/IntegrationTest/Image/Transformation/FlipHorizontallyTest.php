<?php
/**
 * This file is part of the Imbo package
 *
 * (c) Christer Edvartsen <cogo@starzinger.net>
 *
 * For the full copyright and license information, please view the LICENSE file that was
 * distributed with this source code.
 */

namespace Imbo\IntegrationTest\Image\Transformation;

use Imbo\Image\Transformation\FlipHorizontally;

/**
 * @package TestSuite\IntegrationTests
 * @author Christer Edvartsen <cogo@starzinger.net>
 * @covers Imbo\Image\Transformation\FlipHorizontally
 */
class FlipHorizontallyTest extends TransformationTests {
    /**
     * {@inheritdoc}
     */
    protected function getTransformation() {
        return new FlipHorizontally();
    }

    /**
     * {@inheritdoc}
     */
    protected function getExpectedName() {
        return 'fliphorizontally';
    }

    /**
     * {@inheritdoc}
     * @covers Imbo\Image\Transformation\FlipHorizontally::applyToImage
     */
    protected function getImageMock() {
        $image = $this->getMock('Imbo\Image\Image');
        $image->expects($this->once())->method('getBlob')->will($this->returnValue(file_get_contents(FIXTURES_DIR . '/image.png')));
        $image->expects($this->once())->method('setBlob')->with($this->isType('string'))->will($this->returnValue($image));

        return $image;
    }
}
