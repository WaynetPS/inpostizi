<?php

use InPost\Izi\Upgrade\FileRemoverTrait;
use InPost\Izi\Upgrade\TranslationImporterTrait;
use izi\prestashop\CacheClearer\SymfonyCacheClearer;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once __DIR__ . '/FileRemoverTrait.php';
require_once __DIR__ . '/TranslationImporterTrait.php';

class InPostIziUpdater_3_0_0
{
    use FileRemoverTrait;
    use TranslationImporterTrait;

    private const CLASSES_TO_REMOVE = [
        'izi\prestashop\AdminKernel',
        'izi\prestashop\Configuration\Initializer\TwigConfigInitializer',
        'izi\prestashop\Controller\Admin\AbstractController',
        'izi\prestashop\DependencyInjection\ContainerBuilder',
        'izi\prestashop\DependencyInjection\TypedReference',
        'izi\prestashop\DependencyInjection\Argument\ServiceClosureArgument',
        'izi\prestashop\DependencyInjection\Compiler\AnalyzeServiceReferencesPass',
        'izi\prestashop\DependencyInjection\Compiler\ProvideServiceLocatorFactoriesPass',
        'izi\prestashop\DependencyInjection\Compiler\TaggedIteratorsCollectorPass',
        'izi\prestashop\DependencyInjection\Dumper\PhpDumper',
        'izi\prestashop\Form\FormFactoryFactory',
        'izi\prestashop\Form\ChoiceList\OrderStateChoiceLoader',
        'izi\prestashop\Form\ChoiceList\ProductImageTypeChoiceLoader',
        'izi\prestashop\Form\Extension\DependencyInjectionExtension',
        'izi\prestashop\Form\Type\EnvironmentChoiceType',
        'izi\prestashop\Form\Type\OrderStateChoiceType',
        'izi\prestashop\Form\Type\SwitchType',
        'izi\prestashop\Form\Type\TranslatableType',
        'izi\prestashop\Form\Type\Compatibility\CategoryChoiceTreeType',
        'izi\prestashop\Form\Type\Consent\ConsentRequirementChoiceType',
        'izi\prestashop\Form\Type\Shipping\WeekDayChoiceType',
        'izi\prestashop\Form\Type\Widget\WidgetFrameStyleChoiceType',
        'izi\prestashop\Form\Type\Widget\WidgetSizeChoiceType',
        'izi\prestashop\Form\Type\Widget\WidgetVariantChoiceType',
        'izi\prestashop\Form\TypeExtension\HelpTextExtension',
        'izi\prestashop\Form\TypeExtension\ChoicesAsValuesTypeExtension',
        'izi\prestashop\Hook\Exception\HookExceptionTrait',
        'izi\prestashop\Hook\Legacy\Admin\Product\DisplayAdminProductsExtra',
        'izi\prestashop\Hook\Legacy\Admin\Product\ProductOptionsFormRenderer',
        'izi\prestashop\Http\Response\EventStreamResponse',
        'izi\prestashop\Http\Response\ServerSentEvent',
        'izi\prestashop\Http\Response\ServerSentEventBuilder',
        'izi\prestashop\HttpKernel\ServiceParamConverter',
        'izi\prestashop\Repository\CartRuleRepository',
        'izi\prestashop\Repository\CartRuleRepositoryInterface',
        'izi\prestashop\Routing\AdminUrlGenerator',
        'izi\prestashop\Routing\AnnotationDirectoryLoader',
        'izi\prestashop\Security\EmployeeAuthenticator',
        'izi\prestashop\Security\LazyUserProvider',
        'izi\prestashop\Serializer\Exception\MissingConstructorArgumentsException',
        'izi\prestashop\Serializer\Normalizer\DateTimeNormalizer',
        'izi\prestashop\Serializer\Normalizer\JsonSerializableNormalizer',
        'izi\prestashop\Serializer\Normalizer\ObjectNormalizer',
        'izi\prestashop\Translation\DomainNormalizingTranslator',
        'izi\prestashop\Translation\LegacyTranslator',
        'izi\prestashop\Translation\PaymentTypeTranslator',
        'izi\prestashop\Translation\ServiceNameTranslator',
        'izi\prestashop\Twig\Extension\LegacyTranslationExtension',
        'izi\prestashop\Twig\Loader\TemplateNameMappingLoader',
        'izi\prestashop\Validator\ConstraintValidatorFactory',
        'izi\prestashop\Validator\ValidatorFactory',
        'izi\prestashop\View\Asset\VersionStrategy\JsonManifestVersionStrategy',
    ];

    private const FILES_TO_REMOVE = [
        'config/services/common_admin.yml',
        'config/services/common_front.yml',
        'config/services/sf28.yml',
        'config/services/sf34.yml',
        'src/Resources/',
        'upgrade/CacheClearer.php',
        'views/css/admin/admin-legacy.css',
        'views/img/admin/banner_admin.png',
        'views/templates/admin/admin_template_translations.tpl',
        'views/templates/admin/config/shipping/', // v1.5 templates with "legacy_trans" filter usages
        'views/templates/hook/admin/cart_rule_form.tpl',
        'views/templates/hook/admin/order_details.tpl',
        'views/templates/hook/legacy/admin/order_details.tpl',
        'views/templates/hook/legacy/admin/product/_form.tpl',
        'views/templates/hook/legacy/admin/product/options_form.tpl',
        'views/templates/hook/legacy/admin/product/options_form_tab.tpl',
    ];

    public function __construct(Module $module, string $psVersion = _PS_VERSION_)
    {
        $this->module = $module;
        $this->psVersion = $psVersion;
    }

    public static function create(Module $module): self
    {
        return new self($module);
    }

    public function upgrade(): bool
    {
        SymfonyCacheClearer::getInstance()->clear();

        return $this->removeClasses(self::CLASSES_TO_REMOVE)
            && $this->removeFiles(self::FILES_TO_REMOVE)
            && $this->importTranslations();
    }
}

/**
 * @param InPostIzi $module
 */
function upgrade_module_3_0_0(Module $module): bool
{
    if (Tools::version_compare(_PS_VERSION_, '1.7.6')) {
        try {
            $module->uninstall();
        } finally {
            return false;
        }
    }

    return InPostIziUpdater_3_0_0::create($module)->upgrade();
}
