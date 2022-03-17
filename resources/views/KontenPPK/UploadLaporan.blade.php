@extends('Template')
@section('konten')
    <div class="row">
        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="exampleFormControlInput1" readonly placeholder="197203219399494">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Revi Mundandar" class="form-control"  readonly />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="PPK 1.4" class="form-control"  readonly />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea type="text" placeholder="Keterangan" required class="form-control" rows="4"></textarea>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <label class=" fs-6 fw-bold mb-2">File Laporan</label>
                                <input type="text" class="form-control form-control-solid" required placeholder="Label/ Keterangan File" id="label[]" name="label[]"/>
                            </div>
                            <div class="col-md-12">
                                <input type="file" class="form-control form-control-solid valfile" placeholder=""  id="filelaporan[]" name="filelaporan[]"/>
                            </div>


                            <span style="padding-top: 20px"></span>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="idf" value="1" type="hidden" />
                                    <button type="button" class="btn btn-success btn-sm" onclick="tambahFile(); return false;"><i class="fa fa-plus"></i> Tambah File</button>
                                    <br/><br/><div id="divHobi"></div>

                                </div>
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>




    <script>
        function tambahFile() {
            var idf = document.getElementById("idf").value;
            var stre;
            stre="<div id='srow" + idf + "'>" +
                "<div class='col-md-12'>" +
                " <input type='text' class='form-control' placeholder='Label/ Keterangan File' id='judulmateri[]' name='judulmateri[]'/>\n" +
                "</div>" +
                "<div class='col-md-12'>" +
                "<input type='file' class='form-control' placeholder=''  id='filemateri[]' name='filemateri[]'/>\n" +
                "</div>" +
                "<a href='#' class='btn btn-danger btn-flat' onclick='hapusElemen(\"#srow" + idf + "\"); return false;'><i class='fas fa-trash-alt'></i></a></div>";
            $("#divHobi").append(stre);
            idf = (idf-1) + 2;
            document.getElementById("idf").value = idf;
           // console.log(idf)
        }
        function hapusElemen(idf) {
            $(idf).remove();
        }
    </script>

@endsection
