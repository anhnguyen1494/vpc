<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryCrudController extends \Backpack\NewsCRUD\app\Http\Controllers\Admin\CategoryCrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Category");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/category');
        $this->crud->setEntityNameStrings('category', 'categories');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('name', 2);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name',
        ]);
        $this->crud->addColumn([
            'name' => 'slug',
            'label' => 'Slug',
        ]);
        $this->crud->addColumn([
            'label'     => 'Ảnh', // Table column heading
            'type'      => 'image',
            'name'      => 'image', // the column that contains the ID of that connected entity;
            'prefix' => '/',
            // optional width/height if 25px is not ok with you
            'height' => '32px',
            'width' => '32px',
        ]);
        $this->crud->addColumn([
            'label'     => 'Ảnh trang chủ bên phải', // Table column heading
            'type'      => 'image',
            'name'      => 'image_right', // the column that contains the ID of that connected entity;
            'prefix' => '/',
            // optional width/height if 25px is not ok with you
            'width' => '50px',
            'max-height' => 'auto'
        ]);
        $this->crud->addColumn([
            'label' => 'Parent',
            'type' => 'select',
            'name' => 'parent_id',
            'entity' => 'parent',
            'attribute' => 'name',
            'model' => "App\Models\Category",
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'name',
            'label' => 'Name',
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => 'Slug (URL)',
            'type' => 'text',
            'hint' => 'Will be automatically generated from your name, if left empty.',
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([    // Image
            'name' => 'image',
            'label' => 'Ảnh  (*)',
            'type' => 'browse',
            'attributes' => ["placeholder" => "Chọn ảnh danh mục"],
        ]);
        $this->crud->addField([    // Image
            'name' => 'image_right',
            'label' => 'Ảnh trang chủ bên phải (*)',
            'type' => 'browse',
            'attributes' => ["placeholder" => "Chọn ảnh danh mục bên phải ở trang chủ"],
        ]);
        $this->crud->addField([
            'label' => 'Parent',
            'type' => 'select',
            'name' => 'parent_id',
            'entity' => 'parent',
            'attribute' => 'name',
            'model' => "App\Models\Category",
        ]);
    }
}
