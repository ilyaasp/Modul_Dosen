<!DOCTYPE html>
<html>
<?php include 'frame.php'; ?>

<body class="skin-blue">
    <?php include 'header.php';?>
    <div class="wrapper">
        <?php include 'navbar.php';?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Speaker                         
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Speaker</li>
                </ol>
            </section>

            <section class="content">
                <button type="button" class="btn btn-facebook" style="float:right; margin: 10px 10px 0 0">
                    <span class="glyphicon glyphicon-print"></span>
                </button>
                <div class="jumbotron bg-light-blue text-center" style="border-radius: 1rem">
                    <h2>DATA DOSEN SEBAGAI PEMBICARA</h2>
                </div>

                <form action="#" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Nama Dosen </label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="terapan" placeholder="Computer Science">             
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Bidan</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="perguruan-tinggi">                 
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Bukti Pendukung</label>
                        </div>
                        <div class="col-lg-3">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div>
                        
                        </div>
                    </div>

                    <div class="form-group row has-feedback">
                        <div class="col-lg-2 col-xs-12">
                            <label for="tahun" class="control-label">Tahun</label>
                        </div>
                        <div class="col-lg-3 col-xs-5">
                            <input type="date" id="tahun-awal" class="form-control">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        </div>
                        <div class="col-lg-1 col-xs-2">
                            <label for="" class="control-label">sampai</label>
                        </div>
                        <div class="col-lg-3 col-xs-5">
                            <input type="date" id="tahun-akhir" class="form-control">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-4">
                            
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                Kembali
                            </button>
                        </div>
                        <div class="text-right col-xs-8">
                            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#sunting-pend-dosen">Tambahkan Data</button>
                            <button type="submit" class="btn btn-primary">Sunting Data</button>
                        </div>
                    </div>
                </form>
                <div id="sunting-pend-dosen" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <div class="modal-content">
                            <div class="modal-header bg-green text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">SUNTING DATA PENDIDIKAN DOSEN</h4>
                            </div>
                            <div class="modal-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Magister Terapan</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Perguruan Tinggi</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="perguruan-tinggi">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row has-feedback">
                                        <div class="col-lg-2 col-xs-12">
                                            <label for="tahun" class="control-label">Tahun</label>
                                        </div>
                                        <div class="col-lg-3 col-xs-5">
                                            <input type="date" id="tahun-awal" class="form-control">
                                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                        </div>
                                        <div class="col-lg-1 col-xs-2">
                                            <label for="" class="control-label">sampai</label>
                                        </div>
                                        <div class="col-lg-3 col-xs-5">
                                            <input type="date" id="tahun-akhir" class="form-control">
                                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                        </div>
                                    </div>
                                
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>