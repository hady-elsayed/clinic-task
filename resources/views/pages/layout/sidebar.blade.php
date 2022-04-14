<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="/">
                    <i class="material-icons">dashboard</i>
                    <p>home</p>
                </a>
            </li>
            <!-- your sidebar here -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('patient.index')}}">
                    <i class="material-icons">person</i>
                    <p>Patients profiles</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('date.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Clinic schedule</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('examination.index')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Examinations type</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('visit.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>visit controller</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('procedure.index')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>procedure</p>
                </a>
            </li>
        </ul>
    </div>
</div>