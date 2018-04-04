<?php

namespace App\DataTables;

use Form;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\Config;

class CustomDataTable extends DataTable
{
    public function snappyPdf()
    {
        /** @var \Barryvdh\Snappy\PdfWrapper $snappy */
        $snappy = app('snappy.pdf.wrapper');

        $options     = Config::get('datatables.snappy.options', [
            'no-outline'    => true,
            'margin-left'   => '0',
            'margin-right'  => '0',
            'margin-top'    => '10mm',
            'margin-bottom' => '10mm',
        ]);
        $orientation = Config::get('datatables.snappy.orientation', 'landscape');

        $snappy->setOptions($options)
            ->setOrientation($orientation)
            ->setTimeOut(3600);

        return $snappy->loadHTML($this->printPreview())
            ->download($this->getFilename() . ".pdf");
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {

    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {

    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {

    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {

    }
}
