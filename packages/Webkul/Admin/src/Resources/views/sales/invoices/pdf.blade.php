<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
    lang="{{ app()->getLocale() }}"
    dir="{{ core()->getCurrentLocale()->direction }}"
>
    <head>
        <!-- meta tags -
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        @php
            $fontPath = [];

            $fontFamily = [
                'regular' => 'Arial, sans-serif',
                'bold'    => 'Arial, sans-serif',
            ];

            if (in_array(app()->getLocale(), ['ar', 'he', 'fa', 'tr', 'ru', 'uk'])) {
                $fontFamily = [
                    'regular' => 'DejaVu Sans',
                    'bold'    => 'DejaVu Sans',
                ];
            } elseif (app()->getLocale() == 'zh_CN') {
                $fontPath = [
                    'regular' => asset('fonts/NotoSansSC-Regular.ttf'),
                    'bold'    => asset('fonts/NotoSansSC-Bold.ttf'),
                ];

                $fontFamily = [
                    'regular' => 'Noto Sans SC',
                    'bold'    => 'Noto Sans SC Bold',
                ];
            } elseif (app()->getLocale() == 'ja') {
                $fontPath = [
                    'regular' => asset('fonts/NotoSansJP-Regular.ttf'),
                    'bold'    => asset('fonts/NotoSansJP-Bold.ttf'),
                ];

                $fontFamily = [
                    'regular' => 'Noto Sans JP',
                    'bold'    => 'Noto Sans JP Bold',
                ];
            } elseif (app()->getLocale() == 'hi_IN') {
                $fontPath = [
                    'regular' => asset('fonts/Hind-Regular.ttf'),
                    'bold'    => asset('fonts/Hind-Bold.ttf'),
                ];

                $fontFamily = [
                    'regular' => 'Hind ',
                    'bold'    => 'Hind Bold',
                ];
            } elseif (app()->getLocale() == 'bn') {
                $fontPath = [
                    'regular' => asset('fonts/NotoSansBengali-Regular.ttf'),
                    'bold'    => asset('fonts/NotoSansBengali-Bold.ttf'),
                ];

                $fontFamily = [
                    'regular' => 'Noto Sans Bengali',
                    'bold'    => 'Noto Sans Bengali Bold',
                ];
            } elseif (app()->getLocale() == 'sin') {
                $fontPath = [
                    'regular' => asset('fonts/NotoSansSinhala-Regular.ttf'),
                    'bold'    => asset('fonts/NotoSansSinhala-Bold.ttf'),
                ];

                $fontFamily = [
                    'regular' => 'Noto Sans Sinhala',
                    'bold'    => 'Noto Sans Sinhala Bold',
                ];
            }
        @endphp

        <!-- lang supports inclusion --
        <style type="text/css">
            @if (! empty($fontPath['regular']))
            @font-face {
                src: url({{ $fontPath['regular'] }}) format('truetype');
                font-family: {{ $fontFamily['regular'] }};
            }
            @endif

            @if (! empty($fontPath['bold']))
            @font-face {
                src: url({{ $fontPath['bold'] }}) format('truetype');
                font-family: {{ $fontFamily['bold'] }};
                font-style: bold;
            }
            @endif

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: {{ $fontFamily['regular'] }};
            }

            body {
                font-size: 10px;
                color: #091341;
                font-family: "{{ $fontFamily['regular'] }}";
            }

            b, th {
                font-family: "{{ $fontFamily['bold'] }}";
            }

            .page-content {
                padding: 12px;
            }

            .page-header {
                border-bottom: 1px solid #E9EFFC;
                text-align: center;
                font-size: 24px;
                text-transform: uppercase;
                color: #000DBB;
                padding: 24px 0;
                margin: 0;
            }

            .logo-container {
                top: 20px;
                left: 20px;
                background-color: 'blue';
            }

            .logo-container.rtl {
                left: auto;
                right: 20px;
            }

            .logo-container img {
                max-width: 100%;
                height: auto;
            }

            .page-header b {
                display: inline-block;
                vertical-align: middle;
            }

            .small-text {
                font-size: 7px;
            }

            table {
                width: 100%;
                border-spacing: 1px 0;
                border-collapse: separate;
                margin-bottom: 16px;
            }

            table thead th {
                background-color: #E9EFFC;
                color: #000DBB;
                padding: 6px 18px;
                text-align: left;
            }

            table.rtl thead tr th {
                text-align: right;
            }

            table tbody td {
                padding: 9px 18px;
                border-bottom: 1px solid #E9EFFC;
                text-align: left;
                vertical-align: top;
            }

            table.rtl tbody tr td {
                text-align: right;
            }

            .summary {
                width: 100%;
                display: inline-block;
            }

            .summary table {
                float: right;
                width: 250px;
                padding-top: 5px;
                padding-bottom: 5px;
                background-color: #E9EFFC;
                white-space: nowrap;
            }

            .summary table.rtl {
                width: 280px;
            }

            .summary table.rtl {
                margin-right: 480px;
            }

            .summary table td {
                padding: 5px 10px;
            }

            .summary table td:nth-child(2) {
                text-align: center;
            }

            .summary table td:nth-child(3) {
                text-align: right;
            }
        </style>
    </head>

    <body dir="{{ core()->getCurrentLocale()->direction }}">
        <div class="logo-container {{ core()->getCurrentLocale()->direction }}">
            @if (core()->getConfigData('sales.invoice_settings.pdf_print_outs.logo'))
                @php
                    $logoPath = core()->getConfigData('sales.invoice_settings.pdf_print_outs.logo');

                    // Check if the file exists
                    if (Storage::exists($logoPath)) {
                        $logoData = base64_encode(Storage::get($logoPath));
                        $mimeType = Storage::mimeType($logoPath);
                        $logoDataUrl = 'data:'.$mimeType.';base64,'.$logoData;
                    } else {
                        $logoDataUrl = null; // Handle case where logo file does not exist
                    }
                @endphp

                @if ($logoDataUrl)
                    <img src="{{ $logoDataUrl }}" alt="Logo">
                @else
                    <span>Logo Image not found or type unknown</span>
                @endif
            @else
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAAAkCAYAAABFRuIOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAV6SURBVHgB7VrRceM2EH3K+eMyk5nIacBwBfFVELoC+yoIXYHtCs6u4HwVmFdBfH/5E5MGrFRguAIrf/nJKHwiEC5XIAVKViLq+GbWFIAFCGCXi92FgQEDNkBS0MeCHgt6KWjunpOCrgoyGLD3oALMI+gDBvQGb9ANvxSUivK0oF8L+lLQrKC3BY1dW+Kev2HAXoFfuP/aeSQkDXxpQU+C9xwD9gYGlWAp5HEEv/QdVvEP6AnuUClCEtnnSvS5woC9AKMBbw26wFuFCQbsBbxAH9ANGarjYcAO45tIPn/GT9ENVvX/mkDnmhaU1vAEO45RsPZ0Pq+VJ47N3ADHHdIDT7eFKtz4MaHGHLX05MZ9FOXPKK1LX5AWdC/KDK0PscM4wG6CFiQR5b7lIrQF2HmLuKuK0HdkBZ2hSrXfYnPQQkoFO8UrYlCE7YC+1DuUgpuhu28VAsdKsCX0URHGjiy6Yd1+su/MUQzIl0fyGve02A7MqvHjoobvnEX69gid4PnfGrwCUlS3nT6FPUH97kOCgvvgeF5UP45DZ86gHbL/k3s+uncmrs6TTKUb1XaH8HpkfkbPLRFzCM31XpAJjJ+oubfuWVzUQPxl1xMo+x2MS5JojxoS1JNQFu1C40ZfizJ5uaGrnDSL8qy1qt6gvGBrC/uYU5HCv0AV2RjUk2+Za4ebE8dOsHpuxyj3YRUv15B3HD9DuWcLCxebR1j/q2a/g42dZrOinSlsGW5aLJ/LrJsFxr3HMmJi/3Uv0y5RF5I/Qkhyzus6mDGKQ6QoFWaBeEX4/8FNoubTkjAm1xtFZUhEme2560P+Y/ekE2cFX6L6pagrHgV17fqO3DhdM6wSUoGsG+/U0TtX5twzx3Pt2rRinwqairmfqPH9npEusLx29umNIljUzR+Fc1PQJ8UnNzkXfaQl4KZpJZKb97NqoyDuxBi2oPeIdwQ1xuq3Ue0W5do8plheA1BZEdl2qXjknhEZqiPKY7HevkQN/h9fNCgguXij2rnR567+SNWjoWzEb74zQxjMdiboDq7lUrz3EVWISWLyLEd8dAIxllToHOEowdcbV074py+KMG2ot6r8vfjNzb7BZlm9rsKIAZVXJpsIn0kl8YizKOf+GfHQ6/yzhdeq9x/1RRGaHDfTUJ+iHrJRoA+qX9LQ16Ia17h
3hxTxJ6wHi9IPSFEphF4f67KCnhF/BGmlbYv1tdI898VHOGuo1+f5Hw38dMIuBLV55Ppeg561UXW0Nik2Q4bS1+DcRu6pfZ5VkYsEFcGqvibAZ1Afd6HkfVEEg2WBeNMv4b96qfF6g4i2r1k6hv7d/jp5guYEUSwMypBVC5kCyVSdXMezaksCfPoo0WFwguV/ElooX59SzOeOLKqUr0SGyozSMiTut0+wfHHlM7TnAKgE9LYn6h0JXgfMFKaOrCDvJ0jI44yKIi0g55ejFDQt3B0q/8ML36ByRoHlPftX+fpiEeQZbbC8oBz1zCI3xIoyBe/TsedYndPn+2iqHxraH9T7YsF5p6JsUMXy56iv6xb1dWdYnnfi+vijkAJ/H+ALfThTx7tAXxSBm86Nsareokq4zFQ960Jed464K1yLcqOO3fPCPQ/dcxzgX4WZG4/zmjbw5G5+N4G+TWuCmI9177hoeEeOcs9qibVRcMjQXcNro/2uoQ0G1U2gjeD3SZsZut0e0gf5hOY5TFD3WQ6BtWJ/T13m12VNUbx9VIT/AinKY8SiPAZkQusE5TlvBH+G5YxdrzAoQhiMDEwkr0X4BrNXCEcNv/+Arxg0pTIN3AaLPVACIvxVvjncvkX4+2WXLQJhUHrlPAp+RP0spxNGpy3HnmBQhAEL9On/EQZsEWEfYTSPibMH7BH+AYPFe45OKcPoAAAAAElFTkSuQmCC"/>
            @endif
        </div>

        <div class="page">
            <!-- Header -
            <div class="page-header">
                <b>@lang('admin::app.sales.invoices.invoice-pdf.invoice')</b>
            </div>

            <div class="page-content">
                <!-- Invoice Information -
                <table class="{{ core()->getCurrentLocale()->direction }}">
                    <tbody>
                        <tr>
                            @if (core()->getConfigData('sales.invoice_settings.pdf_print_outs.invoice_id'))
                                <td style="width: 50%; padding: 2px 18px;border:none;">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.invoice-id'):
                                    </b>

                                    <span>
                                        #{{ $invoice->increment_id ?? $invoice->id }}
                                    </span>
                                </td>
                            @endif

                            @if (core()->getConfigData('sales.invoice_settings.pdf_print_outs.order_id'))
                                <td style="width: 50%; padding: 2px 18px;border:none;">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.order-id'):
                                    </b>

                                    <span>
                                        #{{ $invoice->order->increment_id }}
                                    </span>
                                </td>
                            @endif
                        </tr>

                        <tr>
                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.sales.invoices.invoice-pdf.date'):
                                </b>

                                <span>
                                    {{ core()->formatDate($invoice->created_at, 'd-m-Y') }}
                                </span>
                            </td>

                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.sales.invoices.invoice-pdf.order-date'):
                                </b>

                                <span>
                                    {{ core()->formatDate($invoice->order->created_at, 'd-m-Y') }}
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Invoice Information --
                <table class="{{ core()->getCurrentLocale()->direction }}">
                    <tbody>
                        <tr>
                            @if (! empty(core()->getConfigData('sales.shipping.origin.country')))
                                <td style="width: 50%; padding: 2px 18px;border:none;">
                                    <b style="display: inline-block; margin-bottom: 4px;">
                                        {{ core()->getConfigData('sales.shipping.origin.store_name') }}
                                    </b>

                                    <div>
                                        <div>{{ core()->getConfigData('sales.shipping.origin.address') }}</div>

                                        <div>{{ core()->getConfigData('sales.shipping.origin.zipcode') . ' ' . core()->getConfigData('sales.shipping.origin.city') }}</div>

                                        <div>{{ core()->getConfigData('sales.shipping.origin.state') . ', ' . core()->getConfigData('sales.shipping.origin.country') }}</div>
                                    </div>
                                </td>
                            @endif

                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                @if ($invoice->hasPaymentTerm())
                                    <div style="margin-bottom: 12px">
                                        <b style="display: inline-block; margin-bottom: 4px;">
                                            @lang('admin::app.sales.invoices.invoice-pdf.payment-terms'):
                                        </b>

                                        <span>
                                            {{ $invoice->getFormattedPaymentTerm() }}
                                        </span>
                                    </div>
                                @endif

                                @if (core()->getConfigData('sales.shipping.origin.bank_details'))
                                    <div>
                                        <b style="display: inline-block; margin-bottom: 4px;">
                                            @lang('admin::app.sales.invoices.invoice-pdf.bank-details'):
                                        </b>

                                        <div>
                                            {!! nl2br(core()->getConfigData('sales.shipping.origin.bank_details')) !!}
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Billing & Shipping Address --
                <table class="{{ core()->getCurrentLocale()->direction }}">
                    <thead>
                        <tr>
                            @if ($invoice->order->billing_address)
                                <th style="width: 50%;">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.bill-to')
                                    </b>
                                </th>
                            @endif

                            @if ($invoice->order->shipping_address)
                                <th style="width: 50%">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.ship-to')
                                    </b>
                                </th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            @if ($invoice->order->billing_address)
                                <td style="width: 50%">
                                    <div>{{ $invoice->order->billing_address->company_name ?? '' }}</div>

                                    <div>{{ $invoice->order->billing_address->name }}</div>

                                    <div>{{ $invoice->order->billing_address->address }}</div>

                                    <div>{{ $invoice->order->billing_address->postcode . ' ' . $invoice->order->billing_address->city }}</div>

                                    <div>{{ $invoice->order->billing_address->state . ', ' . core()->country_name($invoice->order->billing_address->country) }}</div>

                                    <div>@lang('admin::app.sales.invoices.invoice-pdf.contact'): {{ $invoice->order->billing_address->phone }}</div>
                                </td>
                            @endif

                            @if ($invoice->order->shipping_address)
                                <td style="width: 50%">
                                    <div>{{ $invoice->order->shipping_address->company_name ?? '' }}</div>

                                    <div>{{ $invoice->order->shipping_address->name }}</div>

                                    <div>{{ $invoice->order->shipping_address->address }}</div>

                                    <div>{{ $invoice->order->shipping_address->postcode . ' ' . $invoice->order->shipping_address->city }}</div>

                                    <div>{{ $invoice->order->shipping_address->state . ', ' . core()->country_name($invoice->order->shipping_address->country) }}</div>

                                    <div>@lang('admin::app.sales.invoices.invoice-pdf.contact'): {{ $invoice->order->shipping_address->phone }}</div>
                                </td>
                            @endif
                        </tr>
                    </tbody>
                </table>

                <!-- Payment & Shipping Methods --
                <table class="{{ core()->getCurrentLocale()->direction }}">
                    <thead>
                        <tr>
                            <th style="width: 50%">
                                <b>
                                    @lang('admin::app.sales.invoices.invoice-pdf.payment-method')
                                </b>
                            </th>

                            @if ($invoice->order->shipping_address)
                                <th style="width: 50%">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.shipping-method')
                                    </b>
                                </th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
 
                            <td style="width: 50%">
                                {{ core()->getConfigData('sales.payment_methods.' . $invoice->order->payment->method . '.title') }}

                                @php $additionalDetails = \Webkul\Payment\Payment::getAdditionalDetails($invoice->order->payment->method); @endphp

                                @if (! empty($additionalDetails))
                                    <div class="row small-text">
                                        <span>{{ $additionalDetails['title'] }}:</span>

                                        <span>{{ $additionalDetails['value'] }}</span>
                                    </div>
                                @endif
                            </td>

                            @if ($invoice->order->shipping_address)
                                <td style="width: 50%">
                                    {{ $invoice->order->shipping_title }}
                                </td>
                            @endif
                        </tr>
                    </tbody>
                </table>

                <!-- Items --
                <div class="items">
                    <table class="{{ core()->getCurrentLocale()->direction }}">
                        <thead>
                            <tr>
                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.sku')
                                </th>

                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.product-name')
                                </th>

                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.price')
                                </th>

                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.qty')
                                </th>

                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.subtotal')
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($invoice->items as $item)
                                <tr>
                                    <td>
                                        {{ $item->getTypeInstance()->getOrderedItem($item)->sku }}
                                    </td>

                                    <td>
                                        {{ $item->name }}

                                        @if (isset($item->additional['attributes']))
                                            <div>
                                                @foreach ($item->additional['attributes'] as $attribute)
                                                    <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                                @endforeach
                                            </div>
                                        @endif
                                    </td>

                                    <td>
                                        @if (core()->getConfigData('sales.taxes.sales.display_prices') == 'including_tax')
                                            {!! core()->formatBasePrice($item->base_price_incl_tax, true) !!}
                                        @elseif (core()->getConfigData('sales.taxes.sales.display_prices') == 'both')
                                            {!! core()->formatBasePrice($item->base_price_incl_tax, true) !!}

                                            <div class="small-text">
                                                @lang('admin::app.sales.invoices.invoice-pdf.excl-tax')

                                                <span>
                                                    {{ core()->formatPrice($item->base_price) }}
                                                </span>
                                            </div>
                                        @else
                                            {!! core()->formatBasePrice($item->base_price, true) !!}
                                        @endif
                                    </td>

                                    <td>
                                        {{ $item->qty }}
                                    </td>

                                    <td>
                                        @if (core()->getConfigData('sales.taxes.sales.display_subtotal') == 'including_tax')
                                            {!! core()->formatBasePrice($item->base_total_incl_tax, true) !!}
                                        @elseif (core()->getConfigData('sales.taxes.sales.display_subtotal') == 'both')
                                            {!! core()->formatBasePrice($item->base_total_incl_tax, true) !!}

                                            <div class="small-text">
                                                @lang('admin::app.sales.invoices.invoice-pdf.excl-tax')

                                                <span>
                                                    {{ core()->formatPrice($item->base_total) }}
                                                </span>
                                            </div>
                                        @else
                                            {!! core()->formatBasePrice($item->base_total, true) !!}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Summary Table --
                <div class="summary">
                    <table class="{{ core()->getCurrentLocale()->direction }}">
                        <tbody>
                            @if (core()->getConfigData('sales.taxes.sales.display_subtotal') == 'including_tax')
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.subtotal')</td>
                                    <td>-</td>
                                    <td>{!! core()->formatBasePrice($invoice->base_sub_total_incl_tax, true) !!}</td>
                                </tr>
                            @elseif (core()->getConfigData('sales.taxes.sales.display_subtotal') == 'both')
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.subtotal-incl-tax')</td>
                                    <td>-</td>
                                    <td>{!! core()->formatBasePrice($invoice->base_sub_total_incl_tax, true) !!}</td>
                                </tr>

                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.subtotal-excl-tax')</td>
                                    <td>-</td>
                                    <td>{!! core()->formatBasePrice($invoice->base_sub_total, true) !!}</td>
                                </tr>
                            @else
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.subtotal')</td>
                                    <td>-</td>
                                    <td>{!! core()->formatBasePrice($invoice->base_sub_total, true) !!}</td>
                                </tr>
                            @endif

                            @if (core()->getConfigData('sales.taxes.sales.display_shipping_amount') == 'including_tax')
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.shipping-handling')</td>
                                    <td>-</td>
                                    <td>{!! core()->formatBasePrice($invoice->base_shipping_amount_incl_tax, true) !!}</td>
                                </tr>
                            @elseif (core()->getConfigData('sales.taxes.sales.display_shipping_amount') == 'both')
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.shipping-handling-incl-tax')</td>
                                    <td>-</td>
                                    <td>{!! core()->formatBasePrice($invoice->base_shipping_amount_incl_tax, true) !!}</td>
                                </tr>

                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.shipping-handling-excl-tax')</td>
                                    <td>-</td>
                                    <td>{!! core()->formatBasePrice($invoice->base_shipping_amount, true) !!}</td>
                                </tr>
                            @else
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.shipping-handling')</td>
                                    <td>-</td>
                                    <td>{!! core()->formatBasePrice($invoice->base_shipping_amount, true) !!}</td>
                                </tr>
                            @endif

                            <tr>
                                <td>@lang('admin::app.sales.invoices.invoice-pdf.tax')</td>
                                <td>-</td>
                                <td>{!! core()->formatBasePrice($invoice->base_tax_amount, true) !!}</td>
                            </tr>

                            <tr>
                                <td>@lang('admin::app.sales.invoices.invoice-pdf.discount')</td>
                                <td>-</td>
                                <td>{!! core()->formatBasePrice($invoice->base_discount_amount, true) !!}</td>
                            </tr>

                            <tr>
                                <td style="border-top: 1px solid #FFFFFF;">
                                    <b>@lang('admin::app.sales.invoices.invoice-pdf.grand-total')</b>
                                </td>
                                <td style="border-top: 1px solid #FFFFFF;">-</td>
                                <td style="border-top: 1px solid #FFFFFF;">
                                    <b>{!! core()->formatBasePrice($invoice->base_grand_total, true) !!}</b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ core()->getCurrentLocale()->direction }}">

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: DejaVu Sans, Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;

        }

        .container {
            background-color: #f2f2f2;
        }

        /* Header Blocks */
        .header-section {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-desc{
            width: 50%;
            padding: 10px 25% 10px 25%;
            text-align: left;
            vertical-align: middle;
        }
        .store-desc {
            width: 50%;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }

        .invoice-desc {
            background-color: #d5ccc3;
        }
        .invoice-desc p {
            margin: 5px 0; /* Adjust margin for paragraphs */
            color: #000; /* Ensure text is white for visibility */
        }

        .store-desc {
            background-color: #837059;
        }

        .invoice-desc h1,
        .store-desc h1,
        .store-desc p {
            color: #fff;
            margin: 0 0 5px 0;
        }

        .address-section {
            width: 100%;
            border-collapse: collapse;
        }

        .bill-to,
        .ship-to {
            width: 50%;
            padding: 0;
            vertical-align: top;
        }

        .address-header {
            text-align: left;
        }

        .bill-to .address-header,
        .ship-to .address-header {
            background-color: #b29779;
        }

        .address-header p {
            color: #6e5438;
            margin: 0px 0px 0px 25%;
            font-size: 12px;
            font-weight: bold;
        }

        .address-content {
            padding: 5px;
            text-align: left;
            color: #000;
        }

        .address-content p {
            margin: 0px 0px 0px 25%;
            color: #333;
            line-height: 1.2;
        }

        /* Products Table */
        .products-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .products-table th,
        .products-table td {
            padding: 2px 12px 2px 12px;
            text-align: left;
        }

        .products-table td {
            border-bottom: 1px solid #6e5438;
        }

        .products-table th {
            border-right: 4px solid #6e5438;
            background-color: #d5ccc3;
            font-weight: bold;
            padding: 4px 8px;
            /* Decreased padding for height reduction */
            font-size: 10px;
            color: #6e5438
            /* Decreased font size */
        }

        .products-table td {
            font-size: 10px;
            /* Decreased font size */
        }

        /* Totals Section */
        .totals-table {
            width: 300px;
            margin-left: auto;
            margin-bottom: 20px;
            border-collapse: collapse;
        }



        .totals-table td {
            padding: 8px;
            text-align: right;
            border-bottom: 1px solid #ddd;
        }

        .totals-table tr:last-child td {
            font-weight: bold;
            padding: 2px;
            border-top: 2px solid #ddd;
        }

        /* Footer */
        /* Footer */
        .footer {
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            margin-bottom: 40px;

            padding: 0;
        }

        .footer-content {
            width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            border-bottom: 2px solid #6e5438;

        }

        .footer-column {
            width: 33.33%;
            text-align: center;
            padding: 10px;
            color: #666;
            font-size: 10px;
        }

        .website-url {
            width: 600px;
            margin: 10px auto 0;
            text-align: center;
            color: #666;
            font-size: 10px;
        }

        /* RTL Support */
        .rtl {
            direction: rtl;
        }

        .rtl .products-table th,
        .rtl .products-table td,
        .rtl .totals-table td {
            text-align: right;
        }

        .rtl .totals-table {
            margin-right: auto;
            margin-left: 0;
        }

        .spacer {
            width: 100%;
            height: 20px;
            background-color: #b29779;
        }

        .last {
            background-color: #d5ccc3;
        }

        .total {
            color: #6e5438
        }
    </style>
</head>

<body class="{{ core()->getCurrentLocale()->direction === 'rtl' ? 'rtl' : '' }}">
    <div class="container">
        <!-- Header -->
        <table class="header-section">
            <tr>
            <td class="invoice-desc">
                    <h1>{{ __('TAX INVOICE') }}</h1>
                    <p>{{ __('Invoice No:') }} {{ $invoice->id }}</p>
                    <p>{{ __('Invoice Date:') }} {{ $invoice->created_at->format('d/m/Y') }}</p>
                    <p>{{ __('Customer ID:') }} {{ $invoice->order->customer_id }}</p> <!-- Added Customer ID -->
                    <p>{{ __('Order ID:') }} {{ $invoice->order->id }}</p>
                    <p>{{ __('Order Date:') }} {{ $invoice->order->created_at->format('d/m/Y') }}</p> <!-- Added Order Date -->
                </td>
                <td class="store-desc">
                    @if (core()->getConfigData('sales.invoice_settings.pdf_print_outs.logo'))
                                        @php
                                            $logoPath = core()->getConfigData('sales.invoice_settings.pdf_print_outs.logo');
                                            if (Storage::exists($logoPath)) {
                                                $logoData = base64_encode(Storage::get($logoPath));
                                                $mimeType = Storage::mimeType($logoPath);
                                                $logoDataUrl = 'data:' . $mimeType . ';base64,' . $logoData;
                                            }
                                        @endphp
                                        <img src="{{ $logoDataUrl ?? '' }}" alt="Logo" style="max-width: 150px; margin-bottom: 10px;">
                    @endif

                    @if (!empty(core()->getConfigData('sales.shipping.origin.country')))
                        <div
                            style="margin-top: 10px; margin-bottom: 4px; display: flex; justify-content: space-between; align-items: bottom;">
                            <p style="color: #fff; font-size: 8px; font-weight: bold; text-align: left;">Address:
                                {{ core()->getConfigData('sales.shipping.origin.address') }},
                                {{ core()->getConfigData('sales.shipping.origin.zipcode') . ' ' . core()->getConfigData('sales.shipping.origin.city') }},
                                {{ core()->getConfigData('sales.shipping.origin.state') . ', ' . core()->getConfigData('sales.shipping.origin.country') }}
                            </p>
                        </div>
                        <div>
                            <p style="color: #fff; font-size: 8px; font-weight: bold; text-align: left;">GST No:
                                {{ core()->getConfigData('sales.shipping.origin.vat_number') }}
                            </p>
                            <!-- Replace with actual GST number if available -->
                        </div>
                        <div>
                            <p style="color: #fff; font-size: 8px; font-weight: bold; text-align: left;">
                                {{ core()->getConfigData('sales.shipping.origin.bank_details') }}
                            </p>
                            <!-- Replace with actual GST number if available -->
                        </div>
                        <!-- <div style="margin-top: 10px; display: flex; justify-content: space-between;">
                                        <span>Bank Account No: 1234567890</span> <!-- Replace with actual account number --
                                        <span>IFSC: ABCD0123456</span> <!-- Replace with actual IFSC code --
                                        <span>Branch: Main Branch</span> <!-- Replace with actual branch name --
                                    </div> -->
                    @endif
                </td>
            </tr>
        </table>

        <!-- Addresses -->
        <!-- Addresses -->
        <table class="address-section">
            <tr>
                <td class="bill-to">
                    <div class="address-header">
                        <p>{{ __('BILL TO') }}</p>
                    </div>
                    <div class="address-content">
                        @if ($invoice->order->billing_address)
                            <p>Client name: {{ $invoice->order->billing_address->name }}</p>
                            <p>Address: {{ $invoice->order->billing_address->address }}</p>
                            <p>Phone: {{ $invoice->order->billing_address->phone }}</p>
                            <p>Email: {{ $invoice->order->billing_address->email }}</p>
                        @else
                            <p>{{ __('No billing address available') }}</p>
                        @endif
                    </div>
                </td>
                <td class="ship-to">
                    <div class="address-header">
                        <p>{{ __('SHIP TO') }}</p>
                    </div>
                    <div class="address-content">
                        @if ($invoice->order->shipping_address)
                            <p>Client name: {{ $invoice->order->shipping_address->name }}</p>
                            <p>Address: {{ $invoice->order->shipping_address->address }}</p>
                            <p>Phone: {{ $invoice->order->shipping_address->phone }}</p>
                            <p>Email: {{ $invoice->order->shipping_address->email }}</p>
                        @else
                            <p>{{ __('No shipping address available') }}</p>
                        @endif
                    </div>
                </td>
            </tr>
        </table>

        <table class="address-section">
            <tr>
                <td class="bill-to">
                    <div class="address-header">
                        <p>{{ __('BILLING METHOD') }}</p>
                    </div>
                    <div class="address-content">
                        <p>{{ core()->getConfigData('sales.payment_methods.' . $invoice->order->payment->method . '.title') }}
                        </p>

                        @php 
                            $additionalDetails = \Webkul\Payment\Payment::getAdditionalDetails($invoice->order->payment->method); 
                        @endphp

                        @if (!empty($additionalDetails))
                            <p>{{ $additionalDetails['title'] }}:</p>
                        @endif
                    </div>
                </td>
                <td class="ship-to">
                    <div class="address-header">
                        <p>{{ __('SHIPPING METHOD') }}</p>
                    </div>
                    <div class="address-content">
                        @if ($invoice->order->shipping_address)
                            <p>{{ $invoice->order->shipping_title ?? __('Not specified') }}</p>
                        @else
                            <p>{{ __('No shipping address available') }}</p>
                        @endif
                    </div>
                </td>
            </tr>
        </table>
        <div class="spacer"></div>
        <!-- Products -->
        <table class="products-table">
            <thead>
                <tr>
                    <th>{{ __('Si.No') }}</th>
                    <th>{{ __('Product') }}</th>
                    <th>{{ __('HSN') }}</th>
                    <th>{{ __('Unit Price') }}</th>
                    <th>{{ __('Quantity') }}</th>
                    <th>{{ __('Total') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->items as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->sku }}</td>
                        <td>{{ core()->formatBasePrice($item->price) }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ core()->formatBasePrice($item->total) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Totals -->
        <table class="totals-table">
            <tr>
                <td>{{ __('Sub Total:') }}</td>
                <td>{{ core()->formatBasePrice($invoice->sub_total) }}</td>
            </tr>
            <tr>
                <td>{{ __('GST (18%):') }}</td>
                <td>{{ core()->formatBasePrice($invoice->tax_amount) }}</td>
            </tr>
            <tr class="last">
                <td class="total">{{ __('Total:') }}</td>
                <td>{{ core()->formatBasePrice($invoice->grand_total) }}</td>
            </tr>
        </table>

        <!-- Footer -->
        <div class="footer">
            <table class="footer-content">
                <tr>
                    <td class="footer-column">
                        {{ __('9 Mayfair Road, Kolkata - 700019') }}
                    </td>
                    <td class="footer-column">
                        {{ __('+91 98309 39714') }}
                    </td>
                    <td class="footer-column">
                        {{ __('contact@arohahouse.com') }}
                    </td>
                </tr>

            </table>
            <div class="website-url">
                {{ __('www.arohahouse.com') }}
            </div>
        </div>
    </div>
    </div>
</body>

</html>