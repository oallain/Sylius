<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Product\Generator;

use Symfony\Component\String\Slugger\AsciiSlugger;

final class SlugGenerator implements SlugGeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function generate(string $name): string
    {
        $unicodeString = (new AsciiSlugger())->slug($name);

        return strtolower($unicodeString->toString());
    }
}
