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
            <li><a href="#" type="button">LMO</a></li>
            <li><a href="{{ url('/home/edcontent') }}">Exempt Dealings</a></li>
            <li><a href="#">Bio-hazardous Material</a></li>
        </ul>
        
        <li>
            <a href="#">Modification</a>
        </li>
        <li><a href="#">Extension/termination</a></li>
        
    </ul>
    <li><a href="#">Procurement</a></li>
    <li><a href="#">Notification</a></li>
    <li><a href="#">Database</a></li>
    <li><a href="#">Export</a></li>
    <li><a href="#">Accident Reporting</a></li>
    <li><a href="#">Annual report</a></li>
</ul>
