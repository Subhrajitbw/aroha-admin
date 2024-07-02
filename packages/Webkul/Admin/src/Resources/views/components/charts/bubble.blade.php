<v-charts-bubble {{ $attributes }}></v-charts-bubble>

@pushOnce('scripts')
    <!-- Bubble Chart Vue Component Template -->
    <script
        type="text/x-template"
        id="v-charts-bubble-template"
    >
        <canvas
            :id="$.uid + '_chart'"
            class="flex w-full items-end"
            :style="'aspect-ratio:' + aspectRatio + '/1'"
            style=""
        ></canvas>
    </script>

    <script type="module">
        app.component('v-charts-bubble', {
            template: '#v-charts-bubble-template',

            props: {
                datasets: {
                    type: Array,
                    default: () => [],
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
                        type: 'bubble',
                        
                        data: {
                            datasets: this.datasets,
                        },
                
                        options: {
                            aspectRatio: this.aspectRatio,
                            
                            plugins: {
                                legend: {
                                    display: false,
                                },
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
                                easing: 'easeInOutQuad', // Animation easing function
                            },
                        }
                    });
                }
            }
        });
    </script>
@endPushOnce
