<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProductRequest as UpdateRequest;
use App\Models\Product;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ProductCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Product');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/product');
        $this->crud->setEntityNameStrings('Sản phẩm', 'Sản phẩm');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');
        $this->crud->addField([ // Text
            'name'  => 'name',
            'label' => 'Tên (*)',
            'type'  => 'text',
            'attributes' => ["placeholder" => "Tên sản phẩm"],
            'tab' => 'Thông tin cơ bản',

            // optional
            //'prefix' => '',
            //'suffix' => '',
            //'default'    => 'some value', // default value
            //'hint'       => 'Some hint text', // helpful text, show up after input
            //'attributes' => [
            //'placeholder' => 'Some text when empty',
            //'class' => 'form-control some-class'
            //], // extra HTML attributes and values your input might need
            //'wrapperAttributes' => [
            //'class' => 'form-group col-md-12'
            //], // extra HTML attributes for the field wrapper - mostly for resizing fields
            //'readonly'=>'readonly',
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => 'Slug (URL)',
            'type'    => 'hidden',
            'hint' => 'Tự động sinh ra (vd: /lap-dat-2-camera-hikvision).',
//            'disabled' => 'disabled',
            'tab' => 'Thông tin cơ bản',

        ]);
        $this->crud->addField([    // Image
            'name' => 'image',
            'label' => 'Ảnh  (*)',
            'type' => 'browse',
            'attributes' => ["placeholder" => "Chọn ảnh sản phẩm"],
            'tab' => 'Thông tin cơ bản',
        ]);
        $this->crud->addField([ // Text
            'name'  => 'code_pro',
            'label' => 'Mã sản phẩm (*)',
            'type'  => 'text',
            'attributes' => ["placeholder" => "HK-001"],
            'tab' => 'Thông tin cơ bản',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
        ]);
        $this->crud->addField([ // Text
            'name'  => 'trademark',
            'label' => 'Thương hiệu',
            'type'  => 'text',
            'attributes' => ["placeholder" => "Camera Hikvision"],
            'tab' => 'Thông tin cơ bản',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
        ]);

        $this->crud->addField([  // Select2
           'label'     => 'Danh mục  (*)',
           'type'      => 'select2',
           'name'      => 'category_id', // the db column for the foreign key
           'entity'    => 'category', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'wrapperAttributes' => [
               'class' => 'form-group col-md-8'
           ],
            'tab' => 'Thông tin cơ bản',
        ]);
        $this->crud->addField([ // Text
            'name'  => 'guarantee',
            'label' => 'Bảo hành',
            'type'  => 'number',
            'attributes' => ["placeholder" => "Thời gian bảo hành (tháng)"],
            'tab' => 'Thông tin cơ bản',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
        ]);
        $this->crud->addField([   // Number
            'name'  => 'price',
            'label' => 'Giá bán (*)',
            'type'  => 'price',
            // optionals
//             'attributes' => ["step" => "any"], // allow decimals
            'attributes' => ["placeholder" => "Giá khuyến mãi"],
            'prefix' => 'VNĐ',
//            'suffix' => '.000',
             'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
              ], // extra HTML attributes for the field wrapper - mostly for resizing fields
            'tab' => 'Thông tin cơ bản',
        ]);

        $this->crud->addField([   // Number
            'name'  => 'price_real',
            'label' => 'Giá thị trường',
            'type'  => 'price',
            // optionals
             'attributes' => ["placeholder" => "Giá chưa khuyến mãi"], // allow decimals
            'prefix' => 'VNĐ',
//            'suffix' => '.000',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ], // extra HTML attributes for the field wrapper - mostly for resizing fields
            'tab' => 'Thông tin cơ bản',
        ]);
        $this->crud->addField([
            'name'    => 'status', // the name of the db column
            'label'   => 'Tình trạng hàng  (*)', // the input label
            'type'    => 'radio',
            'options' => [ // the key will be stored in the db, the value will be shown as label;
                0 => 'Còn hàng',
                1 => 'Hết hàng',
            ],
            // optional
            'inline' => true, // show the radios all on the same line?
            'tab'    => 'Thông tin cơ bản',
        ]);

        $this->crud->addField([   // Wysiwyg
            'name'  => 'details',
            'label' => 'Chi tiết sản phẩm (*)',
            'type'  => 'wysiwyg',
            'tab'   => 'Chi tiết sản phẩm',
        ]);
        $this->crud->addField([   // Wysiwyg
            'name'  => 'specification',
            'label' => 'Thông số kỹ thuật (*)',
            'type'  => 'wysiwyg',
            'tab'   => 'Thông số kỹ thuật',
        ]);
        $this->crud->addField([   // Wysiwyg
            'name'  => 'promotion',
            'label' => 'Chương trình khuyến mãi',
            'type'  => 'wysiwyg',
            'tab'   => 'Chương trình khuyến mãi',
        ]);
//        $this->crud->addField([ // Table
//            'name'            => 'features',
//            'label'           => 'Features',
//            'type'            => 'table',
//            'entity_singular' => 'feature', // used on the "Add X" button
//            'columns'         => [
//                'name' => 'Feature',
//                'desc' => 'Value',
//            ],
//            'max' => 25, // maximum rows allowed in the table
//            'min' => 0, // minimum rows allowed in the table
//            'tab' => 'Mô tả',
//        ]);

//        $this->crud->addField([ // Table
//            'name'            => 'extra_features',
//            'label'           => 'Extra Features',
//            'type'            => 'table',
//            'entity_singular' => 'extra feature', // used on the "Add X" button
//            'columns'         => [
//                'name' => 'Feature',
//                'desc' => 'Value',
//            ],
//            'fake' => true,
//            'max'  => 25, // maximum rows allowed in the table
//            'min'  => 0, // minimum rows allowed in the table
//            'tab'  => 'Mô tả',
//        ]);

        $this->crud->addFields([
            [ // Text
                'name'  => 'meta_title',
                'label' => 'Meta Title',
                'type'  => 'text',
                'attributes' => ["placeholder" => "SEO tiêu đề (10-70 kí tự)"],
                'tab'   => 'Thẻ meta',
            ],
            [ // Text
                'name'  => 'meta_description',
                'label' => 'Meta Description',
                'type'  => 'text',
                'attributes' => ["placeholder" => "SEO mô tả (160-255 kí tự)"],
                'tab'   => 'Thẻ meta',
            ],
            [ // Text
                'name'  => 'meta_keywords',
                'label' => 'Meta Keywords',
                'type'  => 'text',
                'attributes' => ["placeholder" => "SEO từ khóa (các từ, cụm từ liên quan tới nội dung)"],
                'tab'   => 'Thẻ meta',
            ],
        ]);

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        $this->crud->addColumns([
            [
                'label' => 'ID',
                'name'  => 'id'
            ],
            [
                'label' => 'MSP',
                'name'  => 'code_pro'
            ],
            [
                'label' => 'Tên',
                'name'  => 'name'
            ],
        ]);
        $this->crud->addColumn([
            'label'     => 'Ảnh', // Table column heading
            'type'      => 'image',
            'name'      => 'image', // the column that contains the ID of that connected entity;
            'prefix' => '/',
            // optional width/height if 25px is not ok with you
             'height' => '50px',
             'width' => '50px',
        ]);
        $this->crud->addColumn([
            'label'     => 'Giá',
            'name'      => 'price',
            'type'      => 'closure',
            'function'  => function($entry){
                return number_format($entry->price).' VNĐ';
            },
        ]);
        $this->crud->addColumn([
            'label'     => 'Trạng thái',
            'name'      => 'status',
            'type'      => 'closure',
            'function'  => function($entry){
                $html_status = $entry->status == Product::STATUS_STILL ? 'Còn hàng' : 'Hết hàng' ;
                $class_status = $entry->status == Product::STATUS_STILL ? 'success' : 'default' ;
                return '<span class="label label-'.$class_status.'">'.$html_status.'</span>';
            },
        ]);
        $this->crud->addColumn([
           // 1-n relationship
           'label'     => 'Danh mục', // Table column heading
           'type'      => 'select',
           'name'      => 'category_id', // the column that contains the ID of that connected entity;
           'entity'    => 'category', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
        ]);
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
//         $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
         $this->crud->enableDetailsRow();
        $this->crud->allowAccess('details_row');
        $this->crud->setDetailsRowView('vendor.backpack.crud.details_row.product');
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
//         $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
//         $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
//         $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
        $this->addCustomCrudFilters();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
    public function addCustomCrudFilters()
    {
        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type'  => 'simple',
            'name'  => 'status',
            'label' => 'Còn hàng',
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function () { // if the filter is active (the GET parameter "draft" exits)
                $this->crud->addClause('where', 'status', '1');
            });

        $this->crud->addFilter([ // dropdown filter
            'name' => 'select_from_array',
            'type' => 'dropdown',
            'label'=> 'Trạng thái',
        ], ['1' => 'Còn hàng', '0' => 'Hết hàng'], function ($value) {
            // if the filter is active
            $this->crud->addClause('where', 'status', $value);
        });
        $this->crud->addFilter([ // text filter
            'type'  => 'text',
            'name'  => 'id',
            'label' => 'ID',
        ],
            false,
            function ($value) { // if the filter is active
                $this->crud->addClause('where', 'id', $value);
            });
        $this->crud->addFilter([ // text filter
            'type'  => 'select2',
            'name'  => 'code_pro',
            'label' => 'MSP',
        ],
            function () {
                return Product::all()->keyBy('id')->pluck('code_pro','code_pro')->toArray();
            }, function ($value) { // if the filter is active
                $this->crud->addClause('where', 'code_pro', $value);
            });
        $this->crud->addFilter([ // select2_multiple filter
            'name' => 'name',
            'type' => 'select2',
            'label'=> 'Tên',
        ], function () {
            return Product::all()->keyBy('id')->pluck('name', 'id')->toArray();
        }, function ($value) { // if the filter is active
                $this->crud->addClause('where', 'id', $value);
        });
        $this->crud->addFilter([ // text filter
            'type'  => 'select2',
            'name'  => 'trademark',
            'label' => 'Hãng',
        ], function () {
            $arr_prod = Product::all()->pluck('trademark', 'trademark')->toArray();
            return array_unique($arr_prod);
        }, function ($value) { // if the filter is active
            $this->crud->addClause('where', 'trademark', $value);
        });

        $this->crud->addFilter([ // select2 filter
            'name' => 'category_id',
            'type' => 'select2',
            'label'=> 'Danh mục',
        ], function () {
            return \Backpack\NewsCRUD\app\Models\Category::all()->keyBy('id')->pluck('name', 'id')->toArray();
        }, function ($value) { // if the filter is active
            $this->crud->addClause('where', 'category_id', $value);
        });
    }
}
