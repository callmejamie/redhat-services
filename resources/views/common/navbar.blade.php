<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    
        </div>
        <div class="navbar-header col-md-4" style="padding: 15px"><span class="lead">{{ $pagetitle or 'Page title' }}</span></div>
                
        <ul class="nav navbar-top-links navbar-right">
            <!--
            <li>
                <div id="reportrange" class="form-control">
                    <i class="fa fa-calendar"></i>
                    <span></span> <b class="caret"></b>
                </div>
            </li>
            -->
            <li>
                <div class="form-group">
                <select class="form-control m-b" name="region">
                    <option value="APAC">APAC</option>
                    <option value="ANZ">ANZ</option>
                    <option value="ASEAN">ASEAN</option>
                    <option value="GCG">GCG</option>
                    <option value="India">India</option>
                    <option value="Korea">Korea</option>
                    <option value="Japan">Japan</option>
                </select>
                </div>
            </li>
            <li>
                <div class="form-group">
                <select class="form-control m-b" name="quarter">
                    <option value="1">Q1</option>
                    <option value="2">Q2</option>
                    <option value="3">Q3</option>
                    <option value="4">Q4</option>
                </select>
                </div>
            </li>
            <li>
                <div class="form-group">
                <select class="form-control m-b" name="year">
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                </select>
                </div>
            </li>
            <li>
                <a href="/auth/logout">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>

    </nav>
</div>