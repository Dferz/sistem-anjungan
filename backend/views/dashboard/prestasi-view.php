<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use kartik\builder\FormGrid;
use kartik\widgets\DatePicker;
use kartik\widgets\FileInput;
use kartik\detail\DetailView;

$this->title = '';
?>


<?php
echo DetailView::widget([
		    'model'=>$model,
		    'condensed'=>true,
		    
		    'hover'=>true,
		    'mode'=>DetailView::MODE_VIEW,
		    'panel'=>[
		        'heading'=>'Prestasi Mahasiswa # ' . $data->id,
		        'type'=>DetailView::TYPE_INFO,
		    ],
		    'buttons1'=> false,
		    'attributes'=>[
		        [
		        	'attribute'=>'judul',
		        	'type'=>DetailView::INPUT_TEXT,
		        	'value'=>$data->judul,
		        	'options' => [
		        		'value'=>$data->judul,
		        	],
		        ],
		        [
		        	'attribute'=>'deskripsi',
		        	'type'=>DetailView::INPUT_TEXTAREA,
		        	'value'=>$data->deskripsi != null ? $data->deskripsi : '-',
		        	'options' => [
			            'rows'=>5,
			            'value'=>$data->deskripsi,
			        ],
		        	
		        ],
		        [
		        	'attribute'=>'tanggal',
		        	'format' => 'date',
		        	'type'=>DetailView::INPUT_DATE,
		        	'value'=>$data->tanggal,
		        	'widgetOptions' => [
			            'pluginOptions'=>['format'=>'yyyy-mm-dd'],
			        ],
			        'options' => [
		        		'value'=>$data->tanggal,
		        	],
		        ],
		        [
		        	'attribute'=>'foto',
		        	'type'=>DetailView::INPUT_FILEINPUT,
		        	'value'=>$data->foto != null ? $data->foto : '-',
		        	'options' => [
		        		'value'=>$data->foto,
		        	],
		        ],
		    ],
		    
		]);

?>