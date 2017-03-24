<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use kartik\builder\FormGrid;
use kartik\widgets\DatePicker;
use kartik\widgets\FileInput;
use kartik\detail\DetailView;

$this->title = 'Prestasi Mahasiswa';
?>

<div class="box box-solid box-warning">
	<div class="box-header with-border">
    	<h3 class="box-title"><i class="fa fa-star" style="width:20px;"></i> Prestasi Mahasiswa</h3>
    	<div class="box-tools pull-right">
      		<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    	</div>
  	</div>
  	<div class="box-body">
    	<?php
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                	['class' => '\kartik\grid\CheckboxColumn'],
                    ['class' => 'kartik\grid\SerialColumn'],
                    [
                        'attribute' => 'tanggal',
                        'contentOptions' => ['class' => 'text-center'],
                        'headerOptions' => ['class' => 'text-center kv-align-middle']
                    ],
                    [
                        'attribute' => 'judul',
                        'contentOptions' => ['class' => 'text-justify'],
                        'headerOptions' => ['class' => 'text-center kv-align-middle'],
                    ],
                    [
                        'attribute' => 'Anggota',
                        'format' => 'raw',
                        'value' => function ($data) {
                            $alldata = "";
                            $i = 1;
                            $split = explode(";", $data->anggota);
                            foreach ($split as $value) {
                                
                                $alldata .=$i.". ".$value. "</br>";
                                $i++; 
                            }
                            return $alldata;
                            
                        },
                        'contentOptions' => ['class' => 'text-justify'],
                        'headerOptions' => ['class' => 'text-center kv-align-middle'],
                    ],
                    [
                        'attribute' => 'deskripsi',
                        'contentOptions' => ['class' => 'text-justify'],
                        'headerOptions' => ['class' => 'text-center kv-align-middle']
                    ],
                    [
                        'attribute' => 'foto',
                        'contentOptions' => ['class' => 'text-justify'],
                        'headerOptions' => ['class' => 'text-center kv-align-middle']
                    ],
                    [
				        'class' => 'kartik\grid\ActionColumn',
				        'template' => '{view} {update} {delete}',
				        'vAlign'=>'middle',
				        'headerOptions' => ['width' => '20%', 'class' => '',],
				        'contentOptions' => ['class' => 'padding-left-5px'],

				        'buttons' => [
				            // 'update' => function ($url, $model, $key) {
				            //     return Html::a('<span class="glyphicon glyphicon-eye-open"></span>','branches/update?id=5', [
				            //         'class' => 'activity-view-link',
				            //         'title' => Yii::t('yii', 'Update'),
				            //         'data-toggle' => 'modal',
				            //         'data-target' => '#activity-modal',
				            //         'data-id' => 5,
				            //         'data-pjax' => '0',

				            //     ]);
				            // },
				        	// 'delete' => function ($url , $model) {
			          //           return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, 
			          //               ['data-method' =>'POST'] );
			          //       }
				        ],

				        'urlCreator' => function ($action, $model, $key, $index) {
				            return Url::to(['dashboard/prestasi/'.$action,'id'=>$key]);
				        },

				        'deleteOptions' => [
				        	'message' => 'Apakah anda yakin ingin menghapus item ini?'
				        ],

				    ],

                ],
                
                'options' => ['id' => 'tabel-prestasi'],
                'pjax' => true,
                'bordered' => true,
                'striped' => true,
                'condensed' => true,
                'responsive' => true,
                'hover' => true,
                'toolbar' => [
                	['content' => Html::a('<i class="glyphicon glyphicon-repeat"></i> Refresh', [''], ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid','id'=>'refresh'])
                	],
                	'{toggleData}',
                	'{export}',
                ],
                'panel' => [
                    'type' => GridView::TYPE_DEFAULT,
                    'before' => Html::button('<i class="glyphicon glyphicon-plus"></i> Add Data', ['type'=>'button', 'class'=>'btn btn-success', 'data-toggle'=>'modal', 'data-target'=>'#modal-create-data']),
                    'after' => Html::button('<i class="glyphicon glyphicon-trash"></i> Delete All Selected', ['type'=>'button', 'class'=>'btn btn-danger', 'data-toggle'=>'modal', 'data-target'=>'#modal-delete-multiple']),

                ],
            ]);
        ?>
  	</div>
</div>


<?php
	
	#### Modal DELETE MULTIPLE ####
	Modal::begin([
		'id' => 'modal-delete-multiple',
	    'header' => '<h4 class="modal-title">Multiple Delete Confirmation</h4>',
	    'headerOptions' => ['class' => 'modal-header-warning'],
	    'options' => ['tabindex' => false],
	    'footer' => Html::Button('<i class="glyphicon glyphicon-ban-circle"></i> Cancel', ['class' => 'btn btn-default', 'data-dismiss' => 'modal','name' => 'cancel']).Html::Button('<i class="glyphicon glyphicon-ok"></i> Ok', ['class' => 'btn btn-warning', 'id' => 'btn-submit-delete-multiple' ,'name' => 'ok'])
	]);

	echo 'Apakah anda yakin ingin menghapus item yang di centang?';

	Modal::end();

	#### Modal Tambah ####
	Modal::begin([
		'id' => 'modal-create-data',
	    'header' => '<h4 class="modal-title">Tambah Data</h4>',
	    'headerOptions' => ['class' => ''],
	    'options' => ['tabindex' => false],
	    'footer' => Html::Button('<i class="glyphicon glyphicon-ban-circle"></i> Close', ['class' => 'btn btn-danger', 'data-dismiss' => 'modal','name' => 'close'])
	]);

	// Vertical Form
	$form = ActiveForm::begin([
	    'id' => 'form-prestasi-mahasiswa',
	    'type' => ActiveForm::TYPE_VERTICAL
	]);	
	


echo FormGrid::widget([
    'model' => $model,
    'form' => $form,
    'autoGenerateColumns' => true,
    'rows' => [
        [
            'attributes' => [
                'judul' => [
                	'type'=>Form::INPUT_TEXT, 
                	'options'=>[
                		'placeholder'=>'Judul prestasi...',
                		'autofocus'=> true,
                	]
                ],
            ],
        ],
        [
           'attributes' => [
                'deskripsi' => [
                	'type'=>Form::INPUT_TEXTAREA, 
                	'options'=>['placeholder'=>'Deskripsi prestasi...', 'rows'=>5]
                ],
            ],
        ],
        [
           'attributes' => [
                'tanggal' => [
                	'type'=>Form::INPUT_WIDGET, 
					'widgetClass'=>'\kartik\widgets\DatePicker',
					'options' => [
						'pluginOptions' => [
							'autoclose' => true,
							'todayHighlight' => true,
							'format' => 'yyyy-mm-dd',
				        ],
					],
					
				],
            ],
        ],
        [
           'attributes' => [
                'foto' => [
                	'type'=>Form::INPUT_WIDGET, 
					'widgetClass'=>'\kartik\widgets\FileInput',
					'options' => [
						'pluginOptions' => [
							'showUpload' => false,
							// 'uploadUrl' => Url::to(['/uploads']),
				            // 'initialPreview'=>[
				            //     Html::img("@web/uploads/M0513022.jpeg")
				            // ],
				            // 'overwriteInitial'=>true
				        ],
					],
                					
                ],
            ],
        ],
        [
           'attributes' => [
                'actions'=>[
		            'type'=>Form::INPUT_RAW, 
		            'value'=>'<div style="text-align: center; margin-top: 20px">' . 
		                Html::resetButton('<i class="glyphicon glyphicon-repeat"></i> Reset', ['class'=>'btn btn-default']) . ' ' .
		                Html::submitButton('<i class="glyphicon glyphicon-ok"></i> Submit', ['type'=>'button', 'class'=>'btn btn-primary']) . 
		                '</div>'
		        ],
            ],
        ],

       
    ]
]);

    
	ActiveForm::end();

	Modal::end();



	// Modal::begin([
	//     'header' => '<h4 class="modal-title">Detail View Demo</h4>',
	//     'toggleButton' => ['label' => '<i class="glyphicon glyphicon-th-list"></i> Detail View in Modal', 'class' => 'btn btn-primary'],
	//     'options' => ['tabindex' => false]
	// ]);
	

	// 	echo DetailView::widget([
	// 	    'model'=>$model,
	// 	    'condensed'=>true,
		    
	// 	    'hover'=>true,
	// 	    'mode'=>DetailView::MODE_VIEW,
	// 	    'panel'=>[
	// 	        'heading'=>'Prestasi Mahasiswa # ' . $model->id,
	// 	        'type'=>DetailView::TYPE_INFO,
	// 	    ],
	// 	    // 'label'=>'asdasd',
	// 	    'attributes'=>[
	// 	        [
	// 	        	'attribute'=>'judul',
	// 	        	'type'=>DetailView::INPUT_TEXT,
	// 	        	'value'=>'yess',
	// 	        ],
	// 	        [
	// 	        	'attribute'=>'deskripsi',
	// 	        	'type'=>DetailView::INPUT_TEXTAREA,
	// 	        	'value'=>'',
	// 	        	'options' => [
	// 		            'rows'=>5,
	// 		        ],
		        	
	// 	        ],
	// 	        [
	// 	        	'attribute'=>'tanggal',
	// 	        	'format' => 'date',
	// 	        	'type'=>DetailView::INPUT_DATE,
	// 	        	'widgetOptions' => [
	// 		            'pluginOptions'=>['format'=>'yyyy-mm-dd']
	// 		        ],
	// 	        ],
	// 	        [
	// 	        	'attribute'=>'foto',
	// 	        	'type'=>DetailView::INPUT_FILEINPUT,
	// 	        ],
	// 	    ]
	// 	]);


	// Modal::end();
?>

<?php
$js = <<< JS
	$("#btn-submit-delete-multiple").click(function(){
        $.post(
		    "prestasi/delete-multiple", 
		    {
		        pk : $('#tabel-prestasi').yiiGridView('getSelectedRows')
		    },
		    function () {
		        $.pjax.reload({container:'#tabel-prestasi-container'});
		    }
		);
		$('#modal-delete-multiple').modal('toggle'); 
    }); 
	
	$("#form-prestasi-mahasiswa").on('beforeSubmit', function(e){
        var form = $(this);
    	var formData = form.serialize();
        $.ajax({
	       	url: 'prestasi/insert',
	       	type: 'post',
	       	data: formData,
	       	success: function (data) {
	        	console.log(data);
	        	$.pjax.reload({container:'#tabel-prestasi-container'});
	       	}
	  	});

	  	$('#modal-create-data').modal('toggle');
	  	return false;
    });

JS;
$this->registerJS($js);

?>
