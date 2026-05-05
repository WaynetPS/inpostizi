<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = new class extends PrestaShop\CodingStandards\CsFixer\Config {
    public function getRules(): array
    {
        $rules = parent::getRules();

        if (getenv('INPOST_IZI_DIST_BUILD')) {
            $rules['phpdoc_separation'] = false;
        } else {
            $rules = array_merge($rules, [
                'native_constant_invocation' => ['scope' => 'namespaced'],
                'native_function_invocation' => [
                    'include' => ['@compiler_optimized'],
                    'exclude' => ['defined'],
                    'scope' => 'namespaced',
                    'strict' => true,
                ],
                'trailing_comma_in_multiline' => [
                    'after_heredoc' => true,
                    'elements' => ['array_destructuring', 'arrays', 'match'],
                ],
                'phpdoc_separation' => [
                    'groups' => [
                        ['Annotation', 'NamedArgumentConstructor', 'Target'],
                        ['author', 'copyright', 'license'],
                        ['category', 'package', 'subpackage'],
                        ['property', 'property-read', 'property-write'],
                        ['deprecated', 'link', 'see', 'since'],
                        ['ORM\\*'],
                        ['Assert\\*'],
                    ],
                ],
            ]);
        }

        return $rules;
    }
};

/** @var \Symfony\Component\Finder\Finder $finder */
$finder = $config->setUsingCache(true)->getFinder();
$finder->in(__DIR__)->exclude([
    'vendor',
    'node_modules',
]);

return $config;
