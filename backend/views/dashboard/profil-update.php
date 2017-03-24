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
		    'mode'=>DetailView::MODE_EDIT,
		    'panel'=>[
		        'heading'=>'Profil Dosen # ' . $data->id,
		        'type'=>DetailView::TYPE_INFO,
		    ],
		    'buttons2'=> '{save}',
		    'attributes'=>[
		        [
		        	'attribute'=>'nama_dosen',
		        	'type'=>DetailView::INPUT_TEXT,
		        	'value'=>$data->nama_dosen != null ? $data->nama_dosen : '-',
		        	'options' => [
		        		'value' => $data->nama_dosen
		        	]
		        ],
		        [
		        	'attribute'=>'bidang',
		        	'type'=>DetailView::INPUT_TEXT,
		        	'value'=>$data->bidang != null ? $data->bidang : '-',
		        	'options' => [
		        		'value' => $data->bidang
		        	]
		        	
		        ],
		        [
		        	'attribute'=>'pend_terakhir',
		        	'type'=>DetailView::INPUT_TEXT,
		        	'value'=>$data->pend_terakhir != null ? $data->pend_terakhir : '-',
		        	'options' => [
		        		'value' => $data->pend_terakhir
		        	]
		        	
		        ],
		        [
		        	'attribute'=>'email',
		        	'type'=>DetailView::INPUT_TEXT,
		        	'value'=>$data->email != null ? $data->email : '-',
		        	'options' => [
		        		'value' => $data->email
		        	]
		        	
		        ],
		        [
		        	'attribute'=>'jabatan',
		        	'type'=>DetailView::INPUT_TEXT,
		        	'value'=>$data->jabatan != null ? $data->jabatan : '-',
		        	'options' => [
		        		'value' => $data->jabatan
		        	]
		        	
		        ],
		        [
		        	'attribute'=>'foto',
		        	'type'=>DetailView::INPUT_FILEINPUT,
		        	'value'=>$data->foto != null ? $data->foto : '-',
		        	'options' => [
		        		'value' => $data->foto
		        	]
		        ],
		    ],
		    
		]);

?>