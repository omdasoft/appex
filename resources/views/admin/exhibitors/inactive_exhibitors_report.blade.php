<style>
header{
    width:100%;
    background: #fafafa;
    padding:20px;
}
.table{
    direction:rtl;
    width:100%;
    
}
h3{
    text-align:center
}
.title{
    text-align:center;
    text-decoration:underline;
    font-weight:normal;
   
}
.table th{
    text-align:right;
    background:#fafafa;
    height:30px;
}
tr td{
    height:50px;
}
</style>
<body>
<header>
<table class="table">
    <tr>
    <td width="25%" align="right">معرض السودان الأول لتطبيقات الموبايل والخدمات الإلكترونية</td>
    <td width="50%" align="center"><img src="{{public_path('front/img/logo2.png')}}" width="100" height="50" alt="logo"></td>
    <td width="25%" align="left">Sudan's first exhibition for mobile applications and electronic services</td>
    </tr>
</table>
</header>
<br><br><br>
<h1 class="title">(<?php echo date('Y-m-d') ?>) تقرير الإشتراكات الغير مفعلة</h1>
<br><br>
<table class="table">
            <thead>
            <tr>
                <th>الاسم</th>
                <th>الشركة</th>
                <th>الهاتف</th>
                <th>البريد</th>
                <th>الصالة</th>
                <th>الجناح</th>
                <th>نوع الجناح</th>
                <th>المساحة</th>
                <th>المبلغ</th>
            </tr>
            </thead>
            <tbody>
            @foreach($exhibitors as $ex)
            <tr>
                <td>{{$ex->name}}</td>
                <td>{{$ex->company}}</td>
                <td>{{$ex->phone}}</td>
                <td>{{$ex->email}}</td>
                <td>{{$ex->hall}}</td>
                <td>{{$ex->wing}}</td>
                <td>{{$ex->wing_type}}</td>
                <td>{{$ex->area}}</td>
                <td>{{$ex->ammount}}</td>
            </tr>
            @endforeach
           
            </tbody>
        </table>
        </body>
