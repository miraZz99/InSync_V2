<?php
// source: /home/u305329384/domains/mirazcode.com/public_html/test10/config/common.neon
// source: /home/u305329384/domains/mirazcode.com/public_html/test10/config/services.neon
// source: /home/u305329384/domains/mirazcode.com/public_html/test10/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_6ee41b3d95 extends Nette\DI\Container
{
	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'database.default.context' => 'database.default.explorer',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.explorer',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.explorer']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Doctrine\DBAL\Logging\SQLLogger' => [1 => ['nettrine.dbal.logger']],
		'Doctrine\DBAL\Logging\LoggerChain' => [['nettrine.dbal.logger']],
		'Doctrine\DBAL\Configuration' => [0 => ['nettrine.orm.configuration'], 2 => ['nettrine.dbal.configuration']],
		'Doctrine\Common\EventManager' => [['nettrine.dbal.eventManager']],
		'Nettrine\DBAL\Events\ContainerAwareEventManager' => [['nettrine.dbal.eventManager']],
		'Nettrine\DBAL\ConnectionFactory' => [['nettrine.dbal.connectionFactory']],
		'Doctrine\DBAL\Driver\Connection' => [['nettrine.dbal.connection']],
		'Doctrine\DBAL\Connection' => [['nettrine.dbal.connection']],
		'Doctrine\Common\Cache\Cache' => [['nettrine.cache.driver']],
		'Doctrine\ORM\Configuration' => [['nettrine.orm.configuration']],
		'Doctrine\ORM\Mapping\EntityListenerResolver' => [['nettrine.orm.entityListenerResolver']],
		'Nettrine\ORM\Mapping\ContainerEntityListenerResolver' => [['nettrine.orm.entityListenerResolver']],
		'Doctrine\ORM\Decorator\EntityManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\ORM\EntityManagerInterface' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManager' => [['nettrine.orm.entityManagerDecorator']],
		'Nettrine\ORM\EntityManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\AbstractManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\ConnectionRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\ManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Nettrine\ORM\ManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\Mapping\Driver\MappingDriver' => [
			0 => ['nettrine.orm.mappingDriver'],
			2 => [1 => 'nettrine.orm.xml.xmlDriver'],
		],
		'Doctrine\Persistence\Mapping\Driver\MappingDriverChain' => [['nettrine.orm.mappingDriver']],
		'Doctrine\ORM\Cache\RegionsConfiguration' => [2 => ['nettrine.orm.cache.regions']],
		'Doctrine\ORM\Cache\CacheFactory' => [2 => ['nettrine.orm.cache.cacheFactory']],
		'Doctrine\ORM\Cache\DefaultCacheFactory' => [2 => ['nettrine.orm.cache.cacheFactory']],
		'Doctrine\ORM\Cache\CacheConfiguration' => [2 => ['nettrine.orm.cache.cacheConfiguration']],
		'Doctrine\Persistence\Mapping\Driver\FileDriver' => [2 => ['nettrine.orm.xml.xmlDriver']],
		'Doctrine\ORM\Mapping\Driver\XmlDriver' => [2 => ['nettrine.orm.xml.xmlDriver']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [2 => ['01', '04', '08', 'application.2', 'application.3', 'application.4', 'application.5']],
		'Countable' => [2 => ['01', '04', '08']],
		'IteratorAggregate' => [2 => ['01']],
		'Traversable' => [2 => ['01', '04', '08']],
		'Nette\Application\Routers\RouteList' => [['01']],
		'Nette\Security\Authenticator' => [['02']],
		'Nette\Security\IAuthenticator' => [['02']],
		'Authenticator' => [['02']],
		'App\Model\Service\UserService' => [['03']],
		'Nette\Database\Table\Selection' => [['04', '08']],
		'Nette\Database\IRowContainer' => [['04', '08']],
		'Nette\Database\Table\IRowContainer' => [['04', '08']],
		'Iterator' => [['04', '08']],
		'App\Model\ApiVersionModel' => [['04']],
		'App\Model\ApiModel' => [['05']],
		'App\Model\DocVersionModel' => [['06']],
		'App\Model\DocModel' => [['07']],
		'App\Model\ExporterModel' => [['08']],
		'App\Model\Service\ApiService' => [['09']],
		'App\Model\Service\ExportService' => [['010']],
		'App\Model\Service\ImportService' => [['011']],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
			],
		],
		'App\Presenters\ErrorPresenter' => [2 => ['application.1']],
		'Nette\Application\UI\Presenter' => [2 => ['application.2', 'application.3', 'application.4', 'application.5']],
		'Nette\Application\UI\Control' => [2 => ['application.2', 'application.3', 'application.4', 'application.5']],
		'Nette\Application\UI\Component' => [2 => ['application.2', 'application.3', 'application.4', 'application.5']],
		'Nette\ComponentModel\Container' => [2 => ['application.2', 'application.3', 'application.4', 'application.5']],
		'Nette\ComponentModel\Component' => [2 => ['application.2', 'application.3', 'application.4', 'application.5']],
		'Nette\Application\UI\Renderable' => [2 => ['application.2', 'application.3', 'application.4', 'application.5']],
		'Nette\Application\UI\StatePersistent' => [
			2 => ['application.2', 'application.3', 'application.4', 'application.5'],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => ['application.2', 'application.3', 'application.4', 'application.5'],
		],
		'Nette\ComponentModel\IContainer' => [2 => ['application.2', 'application.3', 'application.4', 'application.5']],
		'Nette\ComponentModel\IComponent' => [2 => ['application.2', 'application.3', 'application.4', 'application.5']],
		'App\Presenters\HomepagePresenter' => [2 => ['application.2']],
		'App\Presenters\AdminPresenter' => [2 => ['application.3']],
		'App\Presenters\ImportPresenter' => [2 => ['application.4']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.5']],
		'NetteModule\ErrorPresenter' => [2 => ['application.6']],
		'NetteModule\MicroPresenter' => [2 => ['application.7']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createService02(): Authenticator
	{
		return new Authenticator($this->getService('03'), $this->getService('security.passwords'));
	}


	public function createService03(): App\Model\Service\UserService
	{
		return new App\Model\Service\UserService($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService04(): App\Model\ApiVersionModel
	{
		return new App\Model\ApiVersionModel($this->getService('database.default.explorer'));
	}


	public function createService05(): App\Model\ApiModel
	{
		return new App\Model\ApiModel($this->getService('database.default.explorer'));
	}


	public function createService06(): App\Model\DocVersionModel
	{
		return new App\Model\DocVersionModel($this->getService('database.default.explorer'));
	}


	public function createService07(): App\Model\DocModel
	{
		return new App\Model\DocModel($this->getService('database.default.explorer'));
	}


	public function createService08(): App\Model\ExporterModel
	{
		return new App\Model\ExporterModel($this->getService('database.default.explorer'));
	}


	public function createService09(): App\Model\Service\ApiService
	{
		return new App\Model\Service\ApiService($this->getService('05'));
	}


	public function createService010(): App\Model\Service\ExportService
	{
		return new App\Model\Service\ExportService($this->getService('07'), $this->getService('05'));
	}


	public function createService011(): App\Model\Service\ImportService
	{
		return new App\Model\Service\ImportService($this->getService('07'));
	}


	public function createServiceApplication__1(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__2(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\AdminPresenter
	{
		$service = new App\Presenters\AdminPresenter($this->getService('011'), $this->getService('09'), $this->getService('010'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__4(): App\Presenters\ImportPresenter
	{
		$service = new App\Presenters\ImportPresenter($this->getService('011'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__5(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__6(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__7(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
		);
		$service->catchExceptions = true;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service,
		);
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('01'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory'),
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, null));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('/home/u305329384/domains/mirazcode.com/public_html/test10/temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage(
			'/home/u305329384/domains/mirazcode.com/public_html/test10/temp/cache',
			$this->getService('cache.journal'),
		);
	}


	public function createServiceContainer(): Container_6ee41b3d95
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=localhost;dbname=u305329384_aqWzQ', 'u305329384_j0ydp', 'Desperado74.', []);
		Nette\Bridges\DatabaseTracy\ConnectionPanel::initialize(
			$service,
			false,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen'),
		);
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__explorer(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage'),
		);
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_6ee41b3d95 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/home/u305329384/domains/mirazcode.com/public_html/test10/temp/cache/latte');
				$service->setAutoRefresh(false);
				$service->setStrictTypes(false);
				$service->setContentType('html');
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		return new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null,
		);
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceNettrine__cache__driver(): Doctrine\Common\Cache\Cache
	{
		return new Doctrine\Common\Cache\PhpFileCache('/home/u305329384/domains/mirazcode.com/public_html/test10/temp/cache/nettrine.cache');
	}


	public function createServiceNettrine__dbal__configuration(): Doctrine\DBAL\Configuration
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setSQLLogger($this->getService('nettrine.dbal.logger'));
		$service->setResultCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setAutoCommit(true);
		return $service;
	}


	public function createServiceNettrine__dbal__connection(): Doctrine\DBAL\Connection
	{
		return $this->getService('nettrine.dbal.connectionFactory')->createConnection(
			[
				'host' => 'localhost',
				'driver' => 'mysqli',
				'dbname' => 'u305329384_aqWzQ',
				'user' => 'u305329384_j0ydp',
				'password' => 'Desperado74.',
				'types' => [],
				'typesMapping' => [],
			],
			$this->getService('nettrine.dbal.configuration'),
			$this->getService('nettrine.dbal.eventManager'),
		);
	}


	public function createServiceNettrine__dbal__connectionFactory(): Nettrine\DBAL\ConnectionFactory
	{
		return new Nettrine\DBAL\ConnectionFactory([], []);
	}


	public function createServiceNettrine__dbal__eventManager(): Nettrine\DBAL\Events\ContainerAwareEventManager
	{
		return new Nettrine\DBAL\Events\ContainerAwareEventManager($this);
	}


	public function createServiceNettrine__dbal__logger(): Doctrine\DBAL\Logging\LoggerChain
	{
		return new Doctrine\DBAL\Logging\LoggerChain([]);
	}


	public function createServiceNettrine__orm__cache__cacheConfiguration(): Doctrine\ORM\Cache\CacheConfiguration
	{
		$service = new Doctrine\ORM\Cache\CacheConfiguration;
		$service->setCacheFactory($this->getService('nettrine.orm.cache.cacheFactory'));
		return $service;
	}


	public function createServiceNettrine__orm__cache__cacheFactory(): Doctrine\ORM\Cache\DefaultCacheFactory
	{
		return new Doctrine\ORM\Cache\DefaultCacheFactory(
			$this->getService('nettrine.orm.cache.regions'),
			$this->getService('nettrine.cache.driver'),
		);
	}


	public function createServiceNettrine__orm__cache__regions(): Doctrine\ORM\Cache\RegionsConfiguration
	{
		return new Doctrine\ORM\Cache\RegionsConfiguration;
	}


	public function createServiceNettrine__orm__configuration(): Doctrine\ORM\Configuration
	{
		$service = new Doctrine\ORM\Configuration;
		$service->setProxyDir('/home/u305329384/domains/mirazcode.com/public_html/test10/temp/proxies');
		$service->setAutoGenerateProxyClasses(2);
		$service->setProxyNamespace('Nettrine\Proxy');
		$service->setMetadataDriverImpl($this->getService('nettrine.orm.mappingDriver'));
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([]);
		$service->setCustomHydrationModes([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setEntityListenerResolver($this->getService('nettrine.orm.entityListenerResolver'));
		$service->setQueryCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setHydrationCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setResultCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setMetadataCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setSecondLevelCacheEnabled(true);
		$service->setSecondLevelCacheConfiguration($this->getService('nettrine.orm.cache.cacheConfiguration'));
		return $service;
	}


	public function createServiceNettrine__orm__entityListenerResolver(
	): Nettrine\ORM\Mapping\ContainerEntityListenerResolver
	{
		return new Nettrine\ORM\Mapping\ContainerEntityListenerResolver($this);
	}


	public function createServiceNettrine__orm__entityManagerDecorator(): Nettrine\ORM\EntityManagerDecorator
	{
		return new Nettrine\ORM\EntityManagerDecorator(Doctrine\ORM\EntityManager::create(
			$this->getService('nettrine.dbal.connection'),
			$this->getService('nettrine.orm.configuration'),
			$this->getService('nettrine.dbal.eventManager'),
		));
	}


	public function createServiceNettrine__orm__managerRegistry(): Nettrine\ORM\ManagerRegistry
	{
		return new Nettrine\ORM\ManagerRegistry(
			$this->getService('nettrine.dbal.connection'),
			$this->getService('nettrine.orm.entityManagerDecorator'),
			$this,
		);
	}


	public function createServiceNettrine__orm__mappingDriver(): Doctrine\Persistence\Mapping\Driver\MappingDriverChain
	{
		$service = new Doctrine\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('nettrine.orm.xml.xmlDriver'), 'App\Model\Entity');
		return $service;
	}


	public function createServiceNettrine__orm__xml__xmlDriver(): Doctrine\ORM\Mapping\Driver\XmlDriver
	{
		$service = new Doctrine\ORM\Mapping\Driver\XmlDriver([], '.dcm.xml');
		$service->getLocator()->addPaths(['/home/u305329384/domains/mirazcode.com/public_html/test10/app/Model/Entity/xml']);
		return $service;
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		return new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			$this->getService('02'),
			storage: $this->getService('security.userStorage'),
		);
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize(): void
	{
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			$logger = $this->getService('tracy.logger');
			if ($logger instanceof Tracy\Logger) $logger->mailer = [
				new Tracy\Bridges\Nette\MailSender(
					$this->getService('mail.mailer'),
					null,
					$this->getByType('Nette\Http\Request', false)?->getUrl()->getHost(),
				),
				'send',
			];
		})();
	}
}
