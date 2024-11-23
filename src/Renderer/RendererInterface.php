<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Renderer;

use BaseCodeOy\Xit\Data\Document;

interface RendererInterface
{
    public function render(Document $document): string;
}
