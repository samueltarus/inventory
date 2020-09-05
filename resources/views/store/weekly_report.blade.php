


<html>
    <head>
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- <link href="{{public_path('css/pdf.css') }}" rel="stylesheet" type="text/css" /> --}}
    </head>
    <body>

<style>
    html, body{
               background-color: #fff;
               color: #636b6f;
               font-family: 'Nunito', sans-serif;
               font-weight: 200;
               height: 100vh;
               margin: 0;
           }
   .invoice{
   padding: 30px;
}

.invoice {
   position: relative;
   background-color: #FFF;
   min-height: 680px;
   padding: 15px
}

.invoice header {
   padding: 10px 0;
   margin-bottom: 20px;
   border-bottom: 1px solid #3989c6
}

.invoice .company-details {
   text-align: right
}

.invoice .company-details .name {
   margin-top: 0;
   margin-bottom: 0
}

.invoice .contacts {
   margin-bottom: 20px
}

.invoice .invoice-to {
   text-align: left
}

.invoice .invoice-to .to {
   margin-top: 0;
   margin-bottom: 0
}

.invoice .invoice-details {
   text-align: right
}

.invoice .invoice-details .invoice-id {
   margin-top: 0;
   color: #3989c6
}

.invoice main {
   padding-bottom: 50px
}

.invoice main .thanks {
   margin-top: -100px;
   font-size: 2em;
   margin-bottom: 50px
}

.invoice main .notices {
   padding-left: 6px;
   border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
   font-size: 1.2em
}

.invoice table {
   width: 100%;
   border-collapse: collapse;
   border-spacing: 0;
   margin-bottom: 20px
}

.invoice table td,.invoice table th {
   padding: 15px;
   background: #eee;
   border-bottom: 1px solid #fff
}

.invoice table th {
   white-space: nowrap;
   font-weight: 400;
   font-size: 16px
}

.invoice table td h3 {
   margin: 0;
   font-weight: 400;
   color: #3989c6;
   font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
   text-align: right;
   font-size: 1.2em
}

.invoice table .no {
   color: #fff;
   font-size: 1.6em;
   background: #3989c6
}

.invoice table .unit {
   background: #ddd
}

.invoice table .total {
   background: #3989c6;
   color: #fff
}

.invoice table tbody tr:last-child td {
   border: none
}

.invoice table tfoot td {
   background: 0 0;
   border-bottom: none;
   white-space: nowrap;
   text-align: right;
   padding: 10px 20px;
   font-size: 1.2em;
   border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
   border-top: none
}

.invoice table tfoot tr:last-child td {
   color: #3989c6;
   font-size: 1.4em;
   border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
   border: none
}

.invoice footer {
   width: 100%;
   text-align: center;
   color: #777;
   border-top: 1px solid #aaa;
   padding: 8px 0
}

@media print {
   .invoice {
       font-size: 11px!important;
       overflow: hidden!important
   }

   .invoice footer {
       position: absolute;
       bottom: 10px;
       page-break-after: always
   }

   .invoice>div:last-child {
       page-break-before: always
   }
}
</style>

<div class="container">
   <div class="row">
       <div class="col-12">
           <div class="card">
               <div class="card-body p-20">
                   <div class="row p-5">


                       <div class=" text-center ">
                           <h3 class="text -align center">Invenotry Weekly Summary</h3>
                           <p class="font-weight-bold mb-1">From Date:</p>
                           <p class="text-muted">Due to: </p>
                       </div>
                   </div>

                   <hr class="my-5">



                   <div class="row p-5">
                       <div class="col-md-12">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Received</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Issued</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Requisition By</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Balance</th>

                                   </tr>
                               </thead>
                               <tbody>

                                @foreach ($products as $products)

                                   <tr>
                                    <td class="ont-weight-bold">{{$products->product_id}}</td>
                                    <td class="ont-weight-bold">{{$products->product_details}}</td>
                                    <td>{{$products->category_name}}</td>
                                    <td>{{$products->product_per_cartoon}}</td>
                                    <td>{{$products->sell_price}}</td>
                                    <td>{{$products->supplier_price}}</td>
                                    <td>{{$products->sell_price}}</td>
                                    <td>{{$products->supplier_price}}</td>


                                   </tr>

                                @endforeach

                               </tbody>
                           </table>
                       </div>
                   </div>


               </div>
           </div>
       </div>
   </div>

    </body>
</html>
