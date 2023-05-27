@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
</div>


<div id="divprint">
    <style type="text/css">
        .ticket-print-main {
            width: 800px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ticket-head {
            font-size: 11px;
            text-align: right;
            font-weight: bold;
            vertical-align: top;
            padding-right: 3px;
        }

        .ticket-value {
            font-size: 11px;
            text-align: left;
            padding-left: 3px;
        }
    </style>

    <div class="ticket-print-main conatiner">
        <div class="text-center">
            <table style="font-size: 11px; font-family: Arial, Helvetica, sans-serif">
                <tbody>
                    <tr>
                        <td style="padding-right: 10px;vertical-align: top;">
                            <table style="font-size:11px; padding-left: -20px;" border="0">
                                <tbody>
                                    <tr>
                                        <td class="ticket-head">Challan No :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->deposit_challan_no }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Date :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->date }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">User ID :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->user_id }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Technologoy :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->technology }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Year :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->admission_year }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Semester :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->current_semester }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Student Name :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->user_name }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Collage ID :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->clg_id }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Roll :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->roll_no }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Deposit :</td>
                                        <td style="font-size: 13px; class="ticket-value">
                                            <b>{{ $deposit_data[0]->deposit_category }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Deposit Amount :</td>
                                        <td style="font-size: 13px; class="ticket-value">
                                            <b>{{ $deposit_data[0]->deposit_amount }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Comment :</td>
                                        <td style="font-size: 13px; class="ticket-value">
                                            <b>{{ $deposit_data[0]->comment }}</b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ticket-head">Reciver :</td>
                                        <td style="font-size: 11px;" class="ticket-value">
                                            {{ $deposit_data[0]->inserter_id }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td style="padding-left: 10px;vertical-align: top;">
                            <table style="font-size:11px; padding-left: -20px;" border="0">
                                <tbody>
                                    <tr>
                                        <td class="ticket-head">Challan No :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->deposit_challan_no }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Date :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->date }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">User ID :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->user_id }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Technologoy :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->technology }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Year :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->admission_year }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Semester :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->current_semester }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Student Name :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->user_name }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Collage ID :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->clg_id }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Roll :</td>
                                        <td style="font-size: 13px;" class="ticket-value">
                                            <b>{{ $deposit_data[0]->roll_no }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Deposit :</td>
                                        <td style="font-size: 13px; class="ticket-value">
                                            <b>{{ $deposit_data[0]->deposit_category }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Deposit Amount :</td>
                                        <td style="font-size: 13px; class="ticket-value">
                                            <b>{{ $deposit_data[0]->deposit_amount }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ticket-head">Comment :</td>
                                        <td style="font-size: 13px; class="ticket-value">
                                            <b>{{ $deposit_data[0]->comment }}</b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ticket-head">Reciver :</td>
                                        <td style="font-size: 11px;" class="ticket-value">
                                            {{ $deposit_data[0]->inserter_id }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                </tbody>
            </table>
        </div>
    </div>
</div>


<button type="button" class="btn btn-info btn-sm noPrint" onclick="window.print()">Print</button>
