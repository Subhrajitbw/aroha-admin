<!-- Total Visitors Vue Component -->
<v-dashboard-total-visitors>
    <!-- Shimmer -->
    <x-admin::shimmer.dashboard.total-sales />
</v-dashboard-total-visitors>

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-dashboard-total-visitors-template"
    >
        <!-- Shimmer -->
        <template v-if="isLoading">
            <x-admin::shimmer.dashboard.total-sales />
        </template>

        <!-- Total Sales Section -->
        <template v-else>
            <div class="grid gap-4 border-b px-4 py-2 dark:border-gray-800">
                <div class="flex justify-between gap-2">
                    <div class="flex flex-col justify-between gap-1">
                        <p class="text-xs font-semibold text-gray-600 dark:text-gray-300">
                            @lang('admin::app.dashboard.index.visitors')
                        </p>

                        <!-- Total Order Revenue -->
                        <p class="text-lg font-bold leading-none text-gray-800 dark:text-white">
                            @{{ report.statistics.total.current }}
                        </p>
                    </div>

                    <div class="flex flex-col justify-between gap-1">
                        <!-- Orders Time Duration -->
                        <p class="text-right text-xs font-semibold text-gray-400 dark:text-white">
                            @{{ report.date_range }}
                        </p>

                        <!-- Total Orders -->
                        <p class="text-right text-xs font-semibold text-gray-400 dark:text-white">
                            @{{ "@lang('admin::app.dashboard.index.unique-visitors')".replace(':count', report.statistics.unique.current ?? 0) }}
                        </p>
                    </div>
                </div>

                <!-- Bar Chart -->
                <x-admin::charts.bubble
                    ::labels="chartLabels"
                    ::datasets="chartDatasets"
                    ::aspect-ratio="1.41"
                />
            </div>
        </template>
    </script>

    <script type="module">
        app.component('v-dashboard-total-visitors', {
            template: '#v-dashboard-total-visitors-template',

            data() {
                return {
                    report: [],
                    isLoading: true,
                }
            },

            computed: {
                chartLabels() {
                    return this.report.statistics.over_time.map(({ label }) => label);
                },

                chartDatasets() {
                    // Generate multiple datasets with different colors for the bubble chart
                    const colors = [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ];
                    return this.report.statistics.over_time.map((stat, index) => {
                        return {
                            label: stat.label,
                            data: [{ x: stat.total, y: stat.total, r: stat.total / 10 }],
                            backgroundColor: colors[index % colors.length],
                            borderColor: colors[index % colors.length].replace('0.2', '1'),
                            borderWidth: 1,
                        };
                    });
                },

                chartOptions() {
                    return {
                        responsive: true,
                        animation: {
                            duration: 1000, // Animation duration in milliseconds
                            easing: 'easeInOutQuad', // Animation easing function
                        },
                        scales: {
                            x: {
                                beginAtZero: true,
                                border: {
                                    dash: [8, 4],
                                }
                            },
                            y: {
                                beginAtZero: true,
                                border: {
                                    dash: [8, 4],
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: true,
                            },
                        },
                    };
                }
            },

            mounted() {
                this.getStats({});

                this.$emitter.on('reporting-filter-updated', this.getStats);
            },

            methods: {
                getStats(filters) {
                    this.isLoading = true;

                    filters = Object.assign({}, filters);
                    filters.type = 'total-visitors';

                    this.$axios.get("{{ route('admin.dashboard.stats') }}", {
                            params: filters
                        })
                        .then(response => {
                            this.report = response.data;
                            this.isLoading = false;
                        })
                        .catch(error => {});
                }
            }
        });
    </script>
@endPushOnce