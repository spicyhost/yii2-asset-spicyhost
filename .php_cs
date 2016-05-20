<?php

$header = <<<EOF
SpicyHost asset files: images, configs and more

@link      https://github.com/spicyhost/yii2-asset-spicyhost
@package   yii2-asset-spicyhost
@license   No license
@copyright Copyright (c) 2016, SpicyHost (https://spicyhost.com/)
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers([
        'header_comment',                        /// Add, replace or remove header comment.
    ])
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
    )
;
