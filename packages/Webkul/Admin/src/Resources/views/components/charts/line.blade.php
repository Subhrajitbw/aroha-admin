<v-charts-line {{ $attributes }}></v-charts-line>

@pushOnce('scripts')
    <!-- SEO Vue Component Template -->
    <script
        type="text/x-template"
        id="v-charts-line-template"
    >
        <canvas
            :id="$.uid + '_chart'"
            class="flex w-full items-end"
            :style="'aspect-ratio:' + aspectRatio + '/1'"
        ></canvas>
    </script>

    <script type="module">
        app.component('v-charts-line', {
            template: '#v-charts-line-template',

            props: {
                labels: {
                    type: Array,
                    default: [],
                },

                datasets: {
                    type: Array,
                    default: true,
                },

                aspectRatio: {
                    type: Number,
                    default: 3.23,
                },
            },

            data() {
                return {
                    chart: undefined,
                }
            },

            mounted() {
                this.prepare();
            },

            methods: {
                prepare() {
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    this.chart = new Chart(document.getElementById(this.$.uid + '_chart'), {
                        type: 'line',

                        data: {
                            labels: this.labels,

                            datasets: this.datasets.map(dataset => ({
                                ...dataset,
                                pointRadius: 0, // Remove intersection points
                            })),
                        },

                        options: {
                            aspectRatio: this.aspectRatio,

                            plugins: {
                                legend: {
                                    display: false
                                },

                                // tooltip: {
                                //     enabled: false,
                                // }
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

                            animation: {
                                duration: 1000, // Animation duration in milliseconds
                                easing: 'easeInOutQuad' // Animation easing function
                            }
                        }
                    });
                }
            }
        });
    </script>
@endPushOnce
