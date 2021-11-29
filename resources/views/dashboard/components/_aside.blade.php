<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('settings.store') }}" class="brand-link "  >

        @if(\App\Store::first()->logo)
        <img   alt="AdminLTE Logo" src="{{ asset('img/'.\App\Store::first()->logo)}}" 
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
             @endif
        <span class="brand-text font-weight-light"><b>{{\App\Store::first()->name}}</b>LTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img  src="{{ asset('img/'.Auth::user()->picture)}}"   class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.show') }}"
                   class="d-block"> {{ucfirst(Auth::user()->last_name)}} {{ucfirst(strtolower(Auth::user()->first_name))}} </a>
                 <i class="fa fa-circle text-success"></i> <span style="color: white;padding-bottom: 1x"> @lang('site.online')</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item has-treeview">
                    <a href="{{ url('dashboard') }}" class="nav-link  ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> @lang('site.dashboard')

                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('dashboard') }}"
                               class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p> @lang('site.overview')</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('settings.paypal') }}"
                               class="nav-link ">
                                <i class="fas fa-dollar-sign nav-icon"></i>
                                <p> Paypal</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('frais.index') }}"
                               class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p> @lang('site.frais')</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('maillist.index') }}"
                               class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mail List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('messages.index') }}"
                               class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Messages</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--ADMIN MENU-->
                @if(Auth::user()->hasPermission('read_users') or  Auth::user()->hasRole('superadministrator') )
                <li class="nav-item has-treeview ">
                    <a href="{{ url('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p> @lang('site.administrators')
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <!-- User Model -->

                            <li class="nav-item">
                                <a href="{{ url('dashboard/users') }}"
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> @lang('site.list_admin')</p>
                                </a>
                            </li>


                        @if(Auth::user()->hasPermission('create_users') or  Auth::user()->hasRole('superadministrator') )
                            <li class="nav-item">
                                <a href="{{ url('dashboard/users/create') }}"
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> @lang('site.new_user')</p>
                                </a>
                            </li>
                    @endif
                    <!-- /.User Model -->
                    </ul>
                </li>
                @endif

                  <!--CUSTOMER MENU-->
                @if(Auth::user()->hasPermission('read_users') or  Auth::user()->hasRole('superadministrator') )
                    <li class="nav-item has-treeview ">
                        <a href="{{ url('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p> @lang('site.customers')

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <!-- User Model -->

                            <li class="nav-item">
                                <a href="{{ route('users.customers.index') }}"
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> @lang('site.list_customers')</p>
                                </a>
                            </li>


                        <!-- /.User Model -->
                        </ul>
                    </li>
                @endif

            <!--CUSTOMER MENU-->
                @if(Auth::user()->hasPermission('read_categories') or  Auth::user()->hasRole('superadministrator') )
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p> @lang('site.categories')

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <!-- User Model -->

                            <li class="nav-item">
                                <a href="{{ route('categories.index') }}"
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> @lang('site.list_categories')</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('categories.create') }}"
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> @lang('site.new_categorie')</p>
                                </a>
                            </li>

                            <!-- /.User Model -->
                        </ul>
                    </li>
                @endif

            <!--PRODUCTS MENU-->
                @if(Auth::user()->hasPermission('read_products') or  Auth::user()->hasRole('superadministrator') )
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p> @lang('site.products')
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <!-- User Model -->

                            <li class="nav-item">
                                <a href="{{ route('products.index') }}"
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> @lang('site.list_products')</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('dashboard/products/create') }}"
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> @lang('site.new_product')</p>
                                </a>
                            </li>

                            <!-- /.User Model -->
                        </ul>
                    </li>
                @endif
            <!--ORDERS MENU-->
                @if(Auth::user()->hasPermission('read_orders') or  Auth::user()->hasRole('superadministrator') )
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-first-order"></i>
                            <p> @lang('site.orders')
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <!-- User Model -->

                            <li class="nav-item">
                                <a href="{{ route('orders.index') }}"
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> @lang('site.list_orders')</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('trials.index') }} "
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Trials List</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('dashboard/orders/new')  }} "
                                   class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> New List Of Orders </p>
                                </a>
                            </li>
                            <!-- /.User Model -->
                        </ul>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>