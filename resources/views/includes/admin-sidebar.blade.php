<!-- sidebar nav -->
<ul class="sidebar-nav menu-content collapse out" id="sidebar">
    <li data-toggle="collapse" data-target="#application" class="collapsed">
        <a href="#">Application</a>
    </li>
    <!--application dropdown-->
    <ul class="sub-menu collapse" id="application">
        <li data-toggle="collapse" data-target="#newApp" class="collapsed">
            <a href="#">New Application</a>
        </li>
        <!--new application drop down-->
        <ul class="sub-menu collapse" id="newApp">
            <li><a href="{{ url('/home/lmocontent') }}" type="button">LMO</a></li>
            <li><a href="{{ route('Clearence.clearence_admin') }}">Exempt Dealings</a></li>
            <li><a href="{{ url('/home/bmcontent') }}">Bio-hazardous Material</a></li>
        </ul>
        
        <li>
            <a href="#">Modification</a>
        </li>
        <li><a href="#">Extension/termination</a></li>
        
    </ul>
    <li><a href="{{ url('/home/Procurement') }}">Procurement</a></li>
    <li><a href="{{ url('/home/notification') }}"><li><a href="{{ route('admin.notification_list') }}">Notification</a></li>
    
    <li data-toggle="collapse" data-target="#exporting" class="collapsed">
        <a href="#">Export</a>
        <ul class="sub-menu collapse" id="exporting">
            <li><a href="{{ url('/home/exportinglmo') }}">Living Modified Organism</a></li>
            <li><a href="{{ url('/home/exportingedbm') }}">ED or BM</a></li>
        </ul>
    </li>
    
    <li data-toggle="collapse" data-target="#accident" class="collapsed">
        <a href="#">Accident Reporting</a>
        <ul class="sub-menu collapse" id="accident">
            <li><a href="{{ url('/home/accidentlmo') }}">Living Modified Organism</a></li>
            <li><a href="{{ url('/home/accidentedbm') }}">ED or BM</a></li>
        </ul>
    </li>

    <li><a href="{{ url('/home/annualreport') }}">Annual report</a></li>
</ul>
