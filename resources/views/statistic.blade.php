@extends('layouts.main')
@section('title', 'Statistic Penduduk')
@section('content')

<div class="font-sans text-gray-900 p-4 bg-red-50 antialiased">
    <!-- Pie Chart -->
    <div class="bg-white rounded-lg shadow-xl p-8 mt-4">
        <span class="font-semibold text-xl">Demografi Berdasar Pekerjaan</span>
        <hr class="border-t-2 my-2" >
        <span class="font-medium text-sm">Grafik Pekerjaan</span>
        <div class="py-6" id="pie-chart"></div>
        <span class="font-medium text-sm my-1">Tabel Pekerjaan</span>
        <div class="flex flex-col justify-center overflow-x-auto">
            <table class="w-full text-sm border border-gray-200">
            <thead class="text-xs text-white bg-[#475669]">
                <tr class="text-center">    
                <th rowspan="2" colspan="2" class="border border-gray-200">Kelompok</th>
                <th colspan="2" class="border border-gray-200">Jumlah</th>
                <th colspan="2" class="border border-gray-200">Laki-laki</th>
                <th colspan="2" class="border border-gray-200">Perempuan</th>
                </tr>
                <tr class="text-center">
                <th class="border border-gray-200">n</th>
                <th class="border border-gray-200">%</th>
                <th class="border border-gray-200">n</th>
                <th class="border border-gray-200">%</th>
                <th class="border border-gray-200">n</th>
                <th class="border border-gray-200">%</th>
                </tr>
            <tbody>
                <tr>
                <td class="flex justify-center pt-1"><div class="h-3 w-3 rounded-full bg-[#1C64F2]"></div></td>
                <td class="text-left">Supir</td>
                <td class="text-right">10</td>
                <td class="text-right">10.00%</td>
                <td class="text-right">7</td>
                <td class="text-right">70.00%</td>
                <td class="text-right">3</td>
                <td class="text-right">30.00%</td>
                </tr>
                <tr>
                <td class="flex justify-center pt-1"><div class="h-3 w-3 rounded-full bg-[#16BDCA]"></div></td>
                <td class="text-left">Karyawan</td>
                <td class="text-right">90</td>
                <td class="text-right">90.00%</td>
                <td class="text-right">67</td>
                <td class="text-right">75.00%</td>
                <td class="text-right">23</td>
                <td class="text-right">25.00%</td>
                </tr>
            </tbody>
            </table>

            
        </div>
    </div>
</div>

@endsection
@push('scripts')

<script>

const getChartOptions = () => {
  return {
    series: [52.8, 26.8],
    colors: ["#1C64F2", "#16BDCA"],
    chart: {
      height: 420,
      width: "100%",
      type: "pie",
    },
    stroke: {
      colors: ["white"],
      lineCap: "",
    },
    plotOptions: {
      pie: {
        labels: {
          show: true,
        },
        size: "100%",
        dataLabels: {
          offset: -25
        }
      },
    },
    labels: ["Direct", "Organic search"],
    dataLabels: {
      enabled: true,
      style: {
        fontFamily: "Inter, sans-serif",
      },
    },
    legend: {
      position: "bottom",
      fontFamily: "Inter, sans-serif",
    },
    yaxis: {
      labels: {
        formatter: function (value) {
          return value + "%"
        },
      },
    },
    xaxis: {
      labels: {
        formatter: function (value) {
          return value  + "%"
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
    },
  }
}

if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
  chart.render();
}

</script>
<script>
  // Dapatkan elemen dengan class="apexcharts-legend"
  var apexLegend = document.querySelector(".apexcharts-legend");
  if (apexLegend) {
    apexLegend.remove();}
</script>
@endpush