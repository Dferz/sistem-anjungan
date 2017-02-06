<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\AutoTabsAsset;

AutoTabsAsset::register($this);
$this->title = $title;
?>

<div class="container">
<div class="wrap-content" style="color:#80b3ff;">
    <div id="jadwal-seminar">
        <ul>
            <li><a href="#seminar-kmm">Seminar KMM</a></li>
            <li><a href="#seminar-proposal">Seminar Proposal</a></li>
            <li><a href="#seminar-hasil">Seminar Hasil</a></li>
            <li><a href="#seminar-ta">Seminar TA</a></li>
        </ul>
        <div id="seminar-kmm" style="overflow: auto;">
            <h3>Seminar KMM</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Penguji</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Tempat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr class="success">
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr class="danger">
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      
                    </tbody>
                </table>  
            </div>
            
        </div>
        <div id="seminar-proposal">
           <h3>Seminar Proposal</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Penguji</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Tempat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr class="success">
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr class="danger">
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      
                    </tbody>
                </table>  
            </div>
        </div>
        <div id="seminar-hasil">
            <h3>Seminar Hasil</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Penguji</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Tempat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr class="success">
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr class="danger">
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      
                    </tbody>
                </table>  
            </div>
        </div>
        <div id="seminar-ta">
            <h3>Seminar TA</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Penguji</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Tempat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr class="success">
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr class="danger">
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2016-12-20</td>
                        <td>DONNY FERNANDO</td>
                        <td>M0513022</td>
                        <td>HARYONO SETIADI, ST., M.Eng</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Ruang Ujian Lt. 4 Gd B FMIPA</td>
                      </tr>
                      
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>
</div>


<?php

#### Tabs Setting ####
$js = <<< JS
var tabs = $('#jadwal-seminar');
    tabs.responsiveTabs({
        rotate: false,
        startCollapsed: 'accordion',
        collapsible: 'accordion',
        setHash: true,
        animation : 'slide',
        animationQueue: 'true',
        duration : 300,
        scrollToAccordion : true,
        scrollToAccordionOffset: true,

    });

JS;
$this->registerJS($js);

#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="jadwal seminar"]' ).attr('selected','');
JS;
$this->registerJS($js);
?>