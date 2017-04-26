<?php namespace Anomaly\CustomersModule;

use Anomaly\CustomersModule\Address\AddressModel;
use Anomaly\CustomersModule\Address\AddressRepository;
use Anomaly\CustomersModule\Address\Contract\AddressRepositoryInterface;
use Anomaly\CustomersModule\Customer\Contract\CustomerRepositoryInterface;
use Anomaly\CustomersModule\Customer\CustomerModel;
use Anomaly\CustomersModule\Customer\CustomerRepository;
use Anomaly\CustomersModule\Group\Contract\GroupRepositoryInterface;
use Anomaly\CustomersModule\Group\GroupRepository;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\Customers\CustomersAddressesEntryModel;
use Anomaly\Streams\Platform\Model\Customers\CustomersCustomersEntryModel;
use Anomaly\UsersModule\User\UserModel;

/**
 * Class CustomersModuleServiceProvider
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule
 */
class CustomersModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/customers'                                => 'Anomaly\CustomersModule\Http\Controller\Admin\CustomersController@index',
        'admin/customers/create'                         => 'Anomaly\CustomersModule\Http\Controller\Admin\CustomersController@create',
        'admin/customers/edit/{id}'                      => 'Anomaly\CustomersModule\Http\Controller\Admin\CustomersController@edit',
        'admin/customers/addresses'                      => 'Anomaly\CustomersModule\Http\Controller\Admin\AddressesController@index',
        'admin/customers/addresses/choose'               => 'Anomaly\CustomersModule\Http\Controller\Admin\AddressesController@choose',
        'admin/customers/addresses/create'               => 'Anomaly\CustomersModule\Http\Controller\Admin\AddressesController@create',
        'admin/customers/addresses/edit/{id}'            => 'Anomaly\CustomersModule\Http\Controller\Admin\AddressesController@edit',
        'admin/customers/addresses/{customer}'           => 'Anomaly\CustomersModule\Http\Controller\Admin\AddressesController@index',
        'admin/customers/addresses/{customer}/create'    => 'Anomaly\CustomersModule\Http\Controller\Admin\AddressesController@create',
        'admin/customers/addresses/{customer}/edit/{id}' => 'Anomaly\CustomersModule\Http\Controller\Admin\AddressesController@edit',
        'admin/customers/groups'                         => 'Anomaly\CustomersModule\Http\Controller\Admin\GroupsController@index',
        'admin/customers/groups/create'                  => 'Anomaly\CustomersModule\Http\Controller\Admin\GroupsController@create',
        'admin/customers/groups/edit/{id}'               => 'Anomaly\CustomersModule\Http\Controller\Admin\GroupsController@edit',
    ];

    /**
     * The addon bindings.
     *
     * @var array
     */
    protected $bindings = [
        CustomersAddressesEntryModel::class => AddressModel::class,
        CustomersCustomersEntryModel::class => CustomerModel::class,
    ];

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        GroupRepositoryInterface::class    => GroupRepository::class,
        AddressRepositoryInterface::class  => AddressRepository::class,
        CustomerRepositoryInterface::class => CustomerRepository::class,
    ];

    /**
     * Boot the addon.
     *
     * @param UserModel $model
     */
    public function boot(UserModel $model)
    {
        $model->bind(
            'customer',
            function () {

                /* @var UserModel $this */
                return $this->hasOne(CustomerModel::class, 'user_id');
            }
        );

        $model->bind(
            'get_customer',
            function () {

                /* @var UserModel $this */
                return $this->customer()->first();
            }
        );
    }

}
