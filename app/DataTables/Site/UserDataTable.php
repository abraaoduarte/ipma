<?php

namespace App\DataTables\Site;

use App\Models\Manage\User;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->editColumn('action', 'manage.users.datatables_actions')
            ->editColumn('is_active', '{!! $is_active?\'<i class="fa fa-check text-success"></i>\':\'<i class="fa fa-times text-danger"></i>\' !!}')
            ->editColumn('created_at', function ($obj) {
                return $obj->created_at->format('d/m/Y');
            })
            ->rawColumns(['is_active', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $users = User::query();
        return $this->applyScopes($users);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->ajax('')
            ->parameters([
                'order' => [1,'asc'],
                'responsive'=> 'true',
                'dom' => 'Bfrltpi',
                'stateSave' => true,
                'scrollX' => false,
                'language'=> [
                    "url"=> asset("vendor/datatables/Portuguese-Brasil.json")
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => [
                'title' => 'ID',
                'name' => 'id',
                'data' => 'id',
                'width'=>'1%',
                'class' => 'text-center'
            ],
            'name' => [
                'title' => 'Usuário',
                'name' => 'name',
                'data' => 'name',
                'width'=>'15%',
                'class' => 'text-left'
            ],
            'email' => [
                'title' => 'Email',
                'name' => 'email',
                'data' => 'email',
                'width'=>'15%',
                'class' => 'text-left'
            ],
            'is_active' => [
                'title' => 'Ativo',
                'name' => 'is_active',
                'data' => 'is_active',
                'width'=>'1%',
                'class' => 'text-center'
            ],
            'created_at' => [
                'title' => 'Criado Em',
                'name' => 'created_at',
                'data' => 'created_at',
                'width'=>'8%',
                'class' => 'text-left'
            ],
            'action' => [
                'title' => '',
                'printable' => false,
                'exportable' => false,
                'searchable' => false,
                'orderable' => false,
                'width'=>'1%',
                'class' => 'all text-center'
            ]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User_' . date('YmdHis');
    }
}
