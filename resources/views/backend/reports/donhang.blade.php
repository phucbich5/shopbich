@extends('backend.layout.master')

@section('title')
Báo cáo Đơn hàng
@endsection

@section('feature-title')
Báo cáo Đơn hàng
@endsection

@section('feature-description')
Báo cáo Đơn hàng
@endsection

@section('custom-css')
<!-- Các style dành cho thư viện Daterangepicker -->
<link href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}" type="text/css" rel="stylesheet" />

<style>
    .notice {
        font-style: italic;
        font-size: 0.8em;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form method="get" action="#" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="thoigianLapBaoCao">Thời gian lập báo cáo</label>
                <input type="text" class="form-control" id="thoigianLapBaoCao">
                <span id="thoigianLapBaoCaoText" class="notice"></span>
            </div>
            <div class="form-group" style="display: none;">
                <label for="tuNgay">Từ ngày</label>
                <input type="text" class="form-control" id="tuNgay" name="tuNgay">
            </div>
            <div class="form-group" style="display: none;">
                <label for="denNgay">Đến ngày</label>
                <input type="text" class="form-control" id="denNgay" name="denNgay">
            </div>
            <button type="submit" class="btn btn-primary" id="btnLapBaoCao">Lập báo cáo</button>
        </form>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Thời gian đặt</th>
            <th scope="col">Thời gian nhận</th>
            <th scope="col">Người nhận</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Sdt người nhận</th>
            <th scope="col">Người gửi</th>
            <th scope="col">Lời chúc</th>
            <th scope="col">Đã thanh toán</th>
            <th scope="col">Nhân viên xử lí</th>
            <th scope="col">Nhân viên giao hàng</th>
            <th scope="col">stt</th>
            <th scope="col">Mã đơn hàng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $donhang)
        
            <tr>
                <td>{{ $donhang->dh_ma}}</td>
                <td>{{ $donhang->kh_ma}}</td>
                <td>{{ $donhang->dh_thoiGianDatHang}}</td>
                <td>{{ $donhang->dh_thoiGianNhanHang}}</td>
                <td>{{ $donhang->dh_nguoiNhan}}</td>
                <td>{{ $donhang->dh_diaChi}}</td>
                <td>{{ $donhang->dh_dienThoai}}</td>
                <td>{{ $donhang->dh_nguoiGui}}</td>
                <td>{{ $donhang->dh_loiChuc}}</td>
                <td>{{ $donhang->dh_daThanhToan}}</td>
                <td>{{ $donhang->nv_xuLy}}</td>
                <td>{{ $donhang->dh_ngayXuLy}}</td>
                <td>{{ $donhang->dh_ngayLapPhieuGiao}}</td>
                <td>{{ $donhang->dh_ngayGiaoHang}}</td>
                <td>{{ $donhang->vc_ma}}</td>
                <td>@if ($donhang->tt_ma == '1')
                    <span>
                        Tien mat
                    </span>
                @else
                    <span>
                        chuyen khoan
                    </span>
                @endif</td>
            </tr>
        @endforeach
    </tbody>
</table>

 {{-- <div class="col-md-12">
        <canvas id="chartOfobjChart" style="width: 100%;height: 400px;"></canvas>
    </div> --}}
@endsection

@section('custom-scripts')
<!-- Các script dành cho thư viện Daterangepicker -->
<script type="text/javascript" src="{{ asset('vendor/momentjs/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/daterangepicker/daterangepicker.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#thoigianLapBaoCao').daterangepicker({
            "singleDatePicker": true,
            "showWeekNumbers": true,
            "showISOWeekNumbers": true,
            "timePicker": true,
            "timePicker24Hour": true,
            "locale": {
                "format": "DD/MM/YYYY HH:mm:ss",
                "separator": " - ",
                "applyLabel": "Đồng ý",
                "cancelLabel": "Hủy",
                "fromLabel": "Từ",
                "toLabel": "Đến",
                "customRangeLabel": "Tùy chọn",
                "weekLabel": "T",
                "daysOfWeek": [
                    "CN",
                    "T2",
                    "T3",
                    "T4",
                    "T5",
                    "T6",
                    "T7"
                ],
                "monthNames": [
                    "Tháng 1",
                    "Tháng 2",
                    "Tháng 3",
                    "Tháng 4",
                    "Tháng 5",
                    "Tháng 6",
                    "Tháng 7",
                    "Tháng 8",
                    "Tháng 9",
                    "Tháng 10",
                    "Tháng 11",
                    "Tháng 12",
                ],
                "firstDay": 1
            },
            "startDate": "15/07/2019",
            "endDate": "21/07/2019",
            ranges: {
                'Hôm nay': [moment(), moment()],
                'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '7 ngày gần nhất': [moment().subtract(6, 'days'), moment()],
                '30 ngày gần nhất': [moment().subtract(29, 'days'), moment()],
                'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                'Tháng rồi': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, function(start, end, label) {
            // Hiển thị thời gian đã chọn
            $('#thoigianLapBaoCaoText').html('Dữ liệu sẽ được thống kê từ <span style="font-weight: bold">' + start.format('DD/MM/YYYY, HH:mm') + '</span> đến <span style="font-weight: bold">' + end.format('DD/MM/YYYY, HH:mm') + '</span><br />Thời gian lập báo cáo có thể tốn vài phút, vui lòng bấm nút <span style="font-weight: bold">"Lập báo cáo"</span> và chờ đợi trong giây lát!');

            // Gán giá trị cho Ngày để gởi dữ liệu về Backend
            $('#tuNgay').val(start.format('YYYY-MM-DD HH:mm:ss'));
            $('#denNgay').val(end.format('YYYY-MM-DD HH:mm:ss'));
        });
    });
</script>

<!-- Các script dành cho thư viện Numeraljs -->
<script src="{{ asset('vendor/numeraljs/numeral.min.js') }}"></script>
<script>
    // Đăng ký tiền tệ VNĐ
    numeral.register('locale', 'vi', {
        delimiters: {
            thousands: ',',
            decimal: '.'
        },
        abbreviations: {
            thousand: 'k',
            million: 'm',
            billion: 'b',
            trillion: 't'
        },
        ordinal: function(number) {
            return number === 1 ? 'một' : 'không';
        },
        currency: {
            symbol: 'vnđ'
        }
    });

    // Sử dụng locate vi (Việt nam)
    numeral.locale('vi');
</script>

<!-- Các script dành cho thư viện ChartJS -->
<script src="{{ asset('vendor/Chart.js/Chart.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var objChart;
        var $chartOfobjChart = document.getElementById("chartOfobjChart").getContext("2d");

        $("#btnLapBaoCao").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('backend.baocao.donhang.data') }}',
                type: "GET",
                data: {
                    tuNgay: $('#tuNgay').val(),
                    denNgay: $('#denNgay').val(),
                },
                success: function(response) {
                    var myLabels = [];
                    var myData = [];
                    $(response.data).each(function() {
                        myLabels.push(moment(this.thoiGian).format('DD/MM/YYYY'));
                        myData.push(this.tongThanhTien);
                    });
                    myData.push(0); // creates a '0' index on the graph

                    if (typeof $objChart !== "undefined") {
                        $objChart.destroy();
                    }

                    $objChart = new Chart($chartOfobjChart, {
                        // The type of chart we want to create
                        type: "bar",

                        data: {
                            labels: myLabels,
                            datasets: [{
                                data: myData,
                                borderColor: "#9ad0f5",
                                backgroundColor: "#9ad0f5",
                                borderWidth: 1
                            }]
                        },

                        // Configuration options go here
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Báo cáo đơn hàng"
                            },
                            scales: {
                                xAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Ngày nhận đơn hàng'
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        callback: function(value) {
                                            return numeral(value).format('0,0 $')
                                        }
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Tổng thành tiền'
                                    }
                                }]
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        return numeral(tooltipItem.value).format('0,0 $')
                                    }
                                }
                            },
                            responsive: true,
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        });
    });
</script>
@endsection