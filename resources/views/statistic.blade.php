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
                @foreach ($jobStats as $job => $stats)
                <tr>
                    <td class="flex justify-center pt-1"><div class="h-3 w-3 rounded-full" style="background-color: {{ $stats['warna'] }}"></div></td>
                    <td class="text-left">{{ $stats['job']->nama_pekerjaan ?? 'Unknown' }}</td>
                    <td class="text-right">{{ $stats['total'] }}</td>
                    <td class="text-right">{{ number_format(($stats['total'] / $pep->count()) * 100, 2) }}%</td>
                    <td class="text-right">{{ $stats['male'] }}</td>
                    <td class="text-right">{{ number_format(($stats['male'] / $stats['total']) * 100, 2) }}%</td>
                    <td class="text-right">{{ $stats['female'] }}</td>
                    <td class="text-right">{{ number_format(($stats['female'] / $stats['total']) * 100, 2) }}%</td>
                </tr>
                @endforeach
            </tbody>
            </table>


        </div>
    </div>
</div>

@endsection
@push('scripts')

<script>
// Data from the PHP controller
const chartData = @json($chartData);

const getChartOptions = () => {
  return {
    series: chartData.series, // Use series data from the database
    colors: chartData.colors, // Use colors from the database
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
    labels: chartData.labels, // Use labels from the database
    dataLabels: {
      enabled: true,
      formatter: function (value) {
        return value.toFixed(1) + "%"; // Round to 1 decimal place
      },
      style: {
        fontFamily: "Inter, sans-serif",
      },
    },
    tooltip: {
      y: {
        formatter: function (value) {
          return value.toFixed(1) + "%"; // Round tooltip values to 1 decimal place
        }
      }
    },
    legend: {
      position: "bottom",
      fontFamily: "Inter, sans-serif",
    },
    yaxis: {
      labels: {
        formatter: function (value) {
          return value + "%";
        },
      },
    },
    xaxis: {
      labels: {
        formatter: function (value) {
          return value  + "%";
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
    },
  };
};

if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
  chart.render();
}

// Remove the legend if it's present
var apexLegend = document.querySelector(".apexcharts-legend");
if (apexLegend) {
  apexLegend.remove();
}

</script>
@endpush


