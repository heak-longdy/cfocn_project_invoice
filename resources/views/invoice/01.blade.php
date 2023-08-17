<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice 01</title>

    @vite('resources/sass/app.scss')


    <style type="text/css">
        .head-content {
            text-align: center;
        }

        .head-content h2 {
            margin: 0;
        }

        .m-0 {
            margin: 0px;
        }

        .p-0 {
            padding: 0px;
        }

        .pt-5 {
            padding-top: 5px;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .text-center {
            text-align: center !important;
        }

        .w-100 {
            width: 100%;
        }

        .w-50 {
            width: 50%;
        }

        .w-85 {
            width: 85%;
        }

        .w-15 {
            width: 15%;
        }

        .size-15 {
            font-size: 15px;
        }

        .size-11 {
            font-size: 11px;
        }

        .font-bold {
            font-weight: bold;
        }

        .m-0 {
            margin: 0px;
        }

        .float-left {
            float: left;
        }

        .float-right {
            float: right;
        }

        .text-right {
            text-align: right;
        }

        .logo {
            margin-bottom: 30px;
        }

        .logo img {
            width: 100%;
            height: auto;
        }

        hr {
            border: 1px solid #5D5D5D;
        }

        .gray-color {
            color: #5D5D5D;
        }

        .black-color {
            color: #000;
        }

        .text-bold {
            font-weight: bold;
        }

        .bold-700 {
            font-weight: 700;
        }

        .border {
            border: 1px solid black;
        }

        .text-decoration {
            text-decoration: underline;
        }

        table {
            border-collapse: collapse;
        }

        table tr th {
            border: 1px solid #d2d2d2;
            font-size: 15px;
            padding: 5px;
        }

        table tr td {
            border: 1px solid #d2d2d2;
            border-collapse: collapse;
            padding: 5px;
            font-size: 13px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="table">
            <div class="table-header">
                <div class="logo">
                    <img src="{{ public_path('logo.png') }}" alt="">
                </div>
                <div class="size-15 m-0 font-bold" align="center">(ខេមបូឌា) ហ្វឺប៊ើរ អុបទិច ខមញូនីខេសិន ណេតវើក</div>
                <div class="size-15 m-0 font-bold" align="center">(CAMBODIA) FIBER OPTIC COMMUNICATION NETWORK CO., LTD.
                </div>
                <p class="size-11 m-0" align="center">លេខអត្តសញ្ណាណកម្ម អតប :L001-901700659</p>
                <p class="size-11 m-0" align="center">ផ្ទះលេខ ១៦៨ ផ្លូវ ១៩៤៦ ភូមិ ទំនប់ សង្កាត់ ភ្នំពេញថ្មី ខណ្ឌសែនសុខ
                    រាជធានី ភ្នំពេញ</p>
                <p class="size-11 m-0" align="center">ទូរស័ព្ទលេខ (+៨៥៥) ០២៣ ៨៨៨ ០២២ / ០៨៦ ៨២២ ១៧២</p>
                <p class="size-11 m-0" align="center">HP: (+855) 023 888 022 / 086 822 172 Fax: +855 23 886 600</p>
                <p class="size-11 m-0" align="center">ទូរស័ព្ទលេខ (+៨៥៥) ០២៣ ៨៨៨ ០២២ / ០៨៦ ៨២២ ១៧២</p>
                <p class="size-11 m-0 font-bold" align="center">វិក្កយបត្រអាករ</p>
                <p class="size-11 m-0 font-bold" align="center">TAX INVOICE</p>
                <table class="w-100">
                    <tbody>
                        <tr class="w-50">
                            <td class="w-50">ឈ្មោះក្រុមហ៊ុន : ធើបូថេក ឯ.ក </td>
                            <td class="w-50">លេខរៀងវិក្កយបត្រ/ Invoice :</td>
                        </tr>
                        <tr class="w-50">
                            <td class="w-50">Company name : Turbo Tech Solution Co.,Ltd. </td>
                            <td class="w-50">កាលបរិច្ឆេទ/ Date : 01 Aug 2023</td>
                        </tr>
                        <tr class="w-50">
                            <td class="w-50">ឈ្អាស័យដ្ឋាន : #ផ្លូវ ៥៩៨ ភូមិ ខ១ សង្កាត់ ច្រាំងចំរេះ ទី2
                                ខណ្ឌ ឬស្សីកែវ
                                រាជធានី
                                ភ្នំពេញ</td>
                            <td class="w-50">រយៈកាលបរិច្ឆេទ/ Invoice Period : 01 Aug 2023 - 31 Aug 2023
                            </td>
                        </tr>
                        <tr class="w-50">
                            <td class="w-50">Address : St. Chea Sophara, Sangkat Chrang Chamresh 2, Khan
                                Reussey Keo. Phnom Penh, Kingdom of Cambodia.
                            </td>
                            <td class="w-50">លេខកិច្ចសន្យា/ Contract No. :
                            </td>
                        </tr>
                        <tr class="w-50">
                            <td class="w-50">ទូរសព្ទ័លេខ/Telephone : 098456135
                            </td>
                            <td class="w-50">P.O. Nº : LO10 Renewal of L002

                            </td>
                        </tr>
                        <tr class="w-50">
                            <td class="w-50">អ្នកទទួល / Attention :
                            </td>
                            <td class="w-50">Ref :
                            </td>
                        </tr>
                        <tr class="w-50">
                            <td class="w-50">លេខអត្តសញ្ញាណកម្ម អតប (VATIN) : K008-901701793
                            </td>
                            <td class="w-50"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-body">
                <table class="w-100">
                    <thead>
                        <tr>
                            <th class="w-50" colspan="3" style="border: none">
                            </th>
                            <th class="w-50" colspan="4" style="border: none">
                            </th>
                        </tr>

                        <tr>
                            <th style="width: 10%">
                                ល.រ
                                <br>
                                No
                            </th>
                            <th>
                                ប្រភេទ
                                <br>
                                Item
                            </th>
                            <th>
                                បរិរិយាយាយមុខទំនិញ
                                <br>
                                Description
                            </th>
                            <th class="size-11">
                                បរិមាណ
                                <br>
                                Quality
                            <th class="size-11">
                                ឯកតា
                                <br>
                                UOM
                            </th>
                            <th class="size-11">
                                ថ្លៃឯកតា
                                <br>
                                Unit Price($)
                            </th>
                            <th class="size-11">
                                ថ្លៃទំនិញ($)
                                <br>
                                Amount($)
                            </th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Underground Project</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center">1</td>
                            <td style="text-align: center">សំណង់ស៊ីវិល</td>
                            <td>Optical Fiber Cable</td>
                            <td style="text-align: center">1,000</td>
                            <td style="text-align: center">km</td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000</span>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">2</td>
                            <td style="text-align: center">សំណង់ស៊ីវិល</td>
                            <td>Optical Fiber Cable</td>
                            <td style="text-align: center">1,000</td>
                            <td style="text-align: center">km</td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000</span>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">3</td>
                            <td style="text-align: center">សំណង់ស៊ីវិល</td>
                            <td>Optical Fiber Cable</td>
                            <td style="text-align: center">1,000</td>
                            <td style="text-align: center">km</td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000</span>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">4</td>
                            <td style="text-align: center">សំណង់ស៊ីវិល</td>
                            <td>Optical Fiber Cable</td>
                            <td style="text-align: center">1,000</td>
                            <td style="text-align: center">km</td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000</span>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">5</td>
                            <td style="text-align: center">សំណង់ស៊ីវិល</td>
                            <td>Optical Fiber Cable</td>
                            <td style="text-align: center">1,000</td>
                            <td style="text-align: center">km</td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000</span>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" rowspan="3">
                                Remark :
                                <br><br>
                                Note: Ref.NBC Exchang Rate On 01 Aug 20231 USD= 4129Riel
                                ដប់ពីរពាន់ប្រាំមួយរយហុកសិបប្រាំនិងហុកសិបមួយសេន ដុល្លារអាមេរិក / USD
                                Twelve Thousand Six Hundred Sixty Five and Cents Sixty One
                                Only
                            </td>
                            <td colspan="2" style="text-align: right">
                                សរុប
                                <br>
                                Sub total
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                អាករលើតម្លៃបន្ថែម១០%
                                <br>
                                VAT10%
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                សរុបរួម
                                <br>
                                Grand Total
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: space-between">
                                    <span>$</span>
                                    <span>1,000,000</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p class="size-11 m-0">Payment Instruction</p>
                <p class="size-11 m-0">Please kindly remit payment to:</p>
                <p class="size-11 m-0">(CAMBODIA) FIBER OPTIC COMMUNICATION NETWORK CO., LTD.</p>
                <p class="size-11 m-0">CANADIA BANK PLC. A/C NO. 001-0000117418</p>

                <table class="w-100" style="margin-top:10px">
                    <tbody>
                        <tr>
                            <td style="width: 33%; border: none; text-align: center;">
                                ហត្ថលេខា និង ឈ្មោះអ្នកទិញ
                                <br>
                                Customer's Signature & Name
                            </td>
                            <td style="width: 44%; border: none; text-align: center;">
                                ត្រួតពិនិត្យដោយ
                                <br>
                                Approved By
                            </td>
                            <td style="width: 33%; border: none; text-align: center;">
                                ហត្ថលេខា និង ឈ្មោះអ្នកលក់
                                <br>
                                Seller's Signature & Name
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
