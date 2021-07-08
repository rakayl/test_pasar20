@push('css')
<style>
.select2{width:100%!important;}
</style>
@endpush
@extends('awal')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-xl-12">
            <div class="row row-full-height">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                               <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <span class="kt-portlet__head-icon">
                                                        <i class="kt-font-brand flaticon2-list-1"></i>
                                                    </span>
                                                    <h3 class="kt-portlet__head-title">
                                                        Perulangan dan Jumlah perulangan 
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="kt-form" id="form-export">
                                                <div class="kt-portlet__body">
                                                    <div class="form-group row">
                                                        <label for="perulangan" class="col-lg-2 col-form-label">Perulangan</label>
                                                        <div class="col-lg-10">
                                                            <input class="form-control" id="perulangan" name="perulangan" value="0" type="number" min="1" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jumlah" class="col-lg-2 col-form-label">Jumlah Perulangan</label>
                                                        <div class="col-lg-10">
                                                            <input class="form-control" id="jumlah" name="jumlah" value="0" type="number" min="1" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="kt-form__actions text-right">
                                                        <button type="submit" class="btn btn-primary" id="btn-simpan"> <i class="la la-download"></i> Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
            </div>
	</div>
        <div class="col-xl-12">
            <div class="row row-full-height">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                               <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <span class="kt-portlet__head-icon">
                                                        <i class="kt-font-brand flaticon2-list-1"></i>
                                                    </span>
                                                    <h3 class="kt-portlet__head-title">
                                                        Hasil
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="kt-portlet__body">
                                                   <div id="hasil"></div>
                                                </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
            </div>
	</div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="row row-full-height">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                               <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <span class="kt-portlet__head-icon">
                                                        <i class="kt-font-brand flaticon2-list-1"></i>
                                                    </span>
                                                    <h3 class="kt-portlet__head-title">
                                                        Cek Ongkir
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="kt-form" id="form-cek-ongkir">
                                                <div class="kt-portlet__body">
                                                    <div class="form-group row">
                                                        <label for="provinsi" class="col-lg-2 col-form-label">Provinsi Origin</label>
                                                        <div class="col-lg-10">
                                                            <select class="form-control" id="provinsi" name="provinsi"></select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="city" class="col-lg-2 col-form-label">Kota Origin</label>
                                                        <div class="col-lg-10">
                                                            <select disabled="true" class="form-control" id="city" name="city"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <div class="form-group row">
                                                        <label for="provinsi1" class="col-lg-2 col-form-label">Provinsi Destination</label>
                                                        <div class="col-lg-10">
                                                            <select class="form-control" id="provinsi1" name="provinsi1"></select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="city1" class="col-lg-2 col-form-label">Kota Destination</label>
                                                        <div class="col-lg-10">
                                                            <select disabled="true" class="form-control" id="city1" name="city1"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <div class="form-group row">
                                                        <label for="weight" class="col-lg-2 col-form-label">Berat Barang</label>
                                                        <div class="col-lg-10">
                                                            <input class="form-control" id="weight" name="weight" value="0" type="number" min="1" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jumlah" class="col-lg-2 col-form-label">Jumlah Perulangan</label>
                                                        <div class="col-lg-10">
                                                            <select class="form-control"  name="courier" id="courier">
                                                                <option value="">Pilih Kurir</option>
                                                                <option value="jne">JNE</option>
                                                                <option value="pos">POS</option>
                                                                <option value="tiki">TIK</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="kt-form__actions text-right">
                                                        <button type="submit" class="btn btn-primary" id="btn-simpan"> <i class="la la-download"></i> Cek Ongkir</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
            </div>
	</div>
        <div class="col-xl-12">
            <div class="row row-full-height">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                               <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <span class="kt-portlet__head-icon">
                                                        <i class="kt-font-brand flaticon2-list-1"></i>
                                                    </span>
                                                    <h3 class="kt-portlet__head-title">
                                                        Hasil Cek Ongkos Kirim
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="kt-portlet__body">
                                                   <div id="origin"></div>
                                                   <div id="destination"></div>
                                                   <div id="harga"></div>
                                                </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
            </div>
	</div>
    </div>
</div>
    
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            
        });
             $("#form-export").on("submit", (function (e) {
            e.preventDefault();
            var data = {
                'perulangan' : $("#perulangan").val(),
                'jumlah' : $("#jumlah").val(),
            };
                KTApp.block('#kt_content', {message: 'Mohon Tunggu...'});
                var type = "POST";
                var url = "{{ route('penjumlahan') }}";
                $.ajax({
                    type: type,
                    url: url,
                    data: data,
                    dataType: 'json',
                    cache: false,
                    success: function (data) {
                            KTApp.unblock('#kt_content')
                             var obj = jQuery.parseJSON(JSON.stringify(data));
                        if(obj.status){
                            var message='';
                             $.each(obj.message, function(index, value) {
                                message+=value.message+"<br>";
                            });
                            $('#hasil').html(message)
                            Swal.fire({
                                title: "Sukses",
                                text: 'Berhasil.',
                                icon: "success",
                                timer: 3000,
                                type: "success"
                            });
                        } else{
                            Swal.fire({
                                title: "Informasi",
                                text: "Data tidak ditemukan.",
                                timer: 3000,
                                type: "info"
                            });
                             var message = obj.message+"<br>";
                            $('#hasil').html(message)
                        }
                    },
                    error: function (data) {
                          KTApp.unblock('#kt_content')
                        Swal.fire({
                            title: "Gagal",
                            text: "Gagal menyimpan data.",
                            timer: 3000,
                            type: "error"
                        });
                    }
                });
            }));
             $("#form-cek-ongkir").on("submit", (function (e) {
            e.preventDefault();
            var data = {
                'origin' : $("#city").val(),
                'destination' : $("#city1").val(),
                'weight' : parseInt($("#weight").val()),
                'courier' : $("#courier").val(),
            };
                KTApp.block('#kt_content', {message: 'Mohon Tunggu...'});
                var type = "POST";
                var url =  "{{ route('cek_ongkir') }}";
                $.ajax({
                    type: type,
                    url: url,
                    data: data,
                    dataType: 'json',
                    cache: false,
                    success: function (data) {
                            KTApp.unblock('#kt_content')
                             var obj = jQuery.parseJSON(JSON.stringify(data));
                             console.log(data)
                        if(obj.status){
                            var origin =      'Origin      : '+obj.origin_details.type+' '+obj.origin_details.city_name+' '+obj.origin_details.postal_code+', '+obj.origin_details.province;
                            var destination = 'Destination : '+obj.destination_details.type+' '+obj.destination_details.city_name+' '+obj.destination_details.postal_code+', '+obj.destination_details.province;
                            $('#origin').html(origin);
                            $('#destination').html(destination);
                             var result="";
                            $.each(obj.results, function(index, value) {
                                var cost="";
                                $.each(value.costs, function(index, va) {
                                    var cos="";
                                    $.each(va.cost, function(index, v) {
                                        cos += "Value : "+v.value+"<br>";
                                        cos += "Etd : "+v.etd+"<br>";
                                        cos += "Note : "+v.note+"<br>";
                                    });
                                    cost += "Service : "+va.service+"<br>";
                                    cost += "Description : "+va.description+"<br>";
                                    cost += "Cost : "+cos+"<br>";
                                });
                                 result +="Code : "+value.code+"<br>";
                                 result +="Name : "+value.name+"<br>";
                                 result +="Costs : "+cost+"<br>";
                            });
                            $('#harga').html(result);
                            Swal.fire({
                                title: "Sukses",
                                text: 'Berhasil.',
                                icon: "success",
                                timer: 3000,
                                type: "success"
                            });
                        } else{
                            var error="";
                            $.each(obj.pesan, function(index, value) {
                                error+=value+"<br>";
                            });
                            Swal.fire({
                                title: "Gagal",
                                html: error,
                                type: "error"
                            });
                            
                           
                        }
                    },
                    error: function (data) {
                          KTApp.unblock('#kt_content')
                        Swal.fire({
                            title: "Gagal",
                            text: "Gagal menyimpan data.",
                            timer: 3000,
                            type: "error"
                        });
                    }
                });
            }));
             $( "#provinsi" ).select2({
            placeholder: "Pilih Provinsi Origin",
            ajax: { 
                url: "{{route('provinci')}}",
                type: "POST",
                dataType: 'json',
                data: function (params) {
                    return {
                        search: params.term
                    };
                },
                processResults: function (response) {
                    $( "#city" ).prop('disabled', false);
                    $('#city').val(null).trigger('change');
                    return {
                    results: response
                    };
                },
                cache: true
            }
        });
             $( "#city" ).select2({
            placeholder: "Pilih Kota Origin",
            ajax: { 
                url: "{{route('kota')}}",
                type: "POST",
                dataType: 'json',
                data: function (params) {
                    return {
                        search: params.term,
                        id:$("#provinsi").val()
                    };
                },
                processResults: function (response) {
                    return {
                    results: response
                    };
                },
                cache: true
            }
        });
              $( "#provinsi1" ).select2({
            placeholder: "Pilih Provinsi Destination",
            ajax: { 
                url: "{{route('provinci')}}",
                type: "POST",
                dataType: 'json',
                data: function (params) {
                    return {
                        search: params.term
                    };
                },
                processResults: function (response) {
                    $( "#city1" ).prop('disabled', false);
                    $('#city1').val(null).trigger('change');
                    return {
                    results: response
                    };
                },
                cache: true
            }
        });
             $( "#city1" ).select2({
            placeholder: "Pilih Kota Destination",
            ajax: { 
                url: "{{route('kota')}}",
                type: "POST",
                dataType: 'json',
                data: function (params) {
                    return {
                        search: params.term,
                        id:$("#provinsi1").val()
                    };
                },
                processResults: function (response) {
                    return {
                    results: response
                    };
                },
                cache: true
            }
        });
     });
</script>

@endpush