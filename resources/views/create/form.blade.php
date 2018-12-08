<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="small-12 column">
    <div class="top-bar-wrapper">
        <nav class="top-bar">

            <section class="top-bar-section">
                <div class="row">
                    <div class="medium-12 column">


                        <ul class="settings-menu">
                            <li>
                                <a href="/admin/default.aspx"><i class="icon-cv-admin icon-2x"></i></a>
                            </li>
                        </ul>


                        <ul class="profile-menu">
                            <li class="has-dropdown not-click">
                                <a href="javascript:;">
                                    <div class="top-bar-profile-info">
                                        <span class="garage-name">My Garage</span>
                                        <span class="user-name"><span id="menuAdmin_LoginName1" class="username">richardd.jfloress@gmail.com</span></span>
                                    </div>
                                    <div class="top-bar-profile-arrow"></div>
                                </a>

                                <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                                    <li><a href="/admin/userEdit.aspx">My Profile</a></li>
                                    <li><a href="/admin/locationSelect.aspx">My Locations</a></li>
                                    <li><a href="https://carvue.zendesk.com/hc/en-gb" target="_blank">Help</a></li>
                                    <li><a id="menuAdmin_ls1" class="requiredNav log-out" href="javascript:__doPostBack('ctl00$menuAdmin$ls1$ctl00','')">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!--Warnings start-->
                        <div class="message-wrapper">
                            <div class="container browser-warning hide">
                                <div class="row collapse">
                                    <div class="large-12 columns text-center">
                                        <small><a class="Link_KnowledgeBaseRoot" href="https://carvue.zendesk.com/hc/en-gb/categories/115000281551-Knowledge-Base"><i class="icon-warning-sign icon-1-5x"></i>You are using a  browser that is not supported</a> <a href="#" id="hide-browser-warning">[Hide]</a></small>
                                    </div>
                                </div>
                            </div>
                            <div id="divMessage" class="container usage-message">
                                <div id="divSubscribe" class="row collapse">
                                    <div class="large-12 columns">
                                        <small>
                                            <strong>
                                                You have less than 28 days left on your free trial.</strong>
                                            &nbsp;<a href="../account/Subscribe.aspx?LocationID=1794" id="aSubscribe" class="button success small requiredNav">Upgrade Here</a>
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div id="divVerify" class="container verify-warning">
                                <div class="row collapse">
                                    <div class="large-12 columns">
                                        <small>
                                            <a href="../admin/userDetailEdit.aspx?u=2485" id="aVerify" class="button warning small requiredNav">Verify User</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <!--Warnings end-->
                        </div>
                    </div>

                </div>
            </section></nav>
    </div>
    <div class="hero-block">
        <div class="row">
            <div class="small-12 column">
                <div class="row collapse breadcrumbs-wrapper">
                    <div class="large-12 columns">
                        <div class="powered-by"></div>
                        <span id="SiteMapPath1" class="breadcrumbs"><a href="#SiteMapPath1_SkipLink" style="position:absolute;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden;">Skip Navigation Links</a><span><a title="Home" href="/default.aspx">Home</a></span><span> </span><span><a title="Vehicle" href="/Vehicle/default.aspx">Vehicle</a></span><span> </span><span>Edit</span><a id="SiteMapPath1_SkipLink"></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="small-12 columns" id="main-content">
                <!-- START MAIN CONTENT -->

                <div class="panel-head">
                    <header>
                        <div class="row">
                            <div class="medium-4 small-12 columns">
                                <a href="#" class="back-button button pull-left requiredNav">
                                    <i class="icon-angle-left"></i>
                                </a>
                                <h1>
                                    <i class="icon-cv-contact"></i>
                                    Vehicles
                                </h1>
                            </div>
                            <div class="medium-8 small-12 columns">
                                <ul class="inline-list pull-right">
                                    <li>
                                        <a href="edit.aspx" class="button success requiredNav">New Vehicle</a>
                                    </li>
                                    <li>
                                        <div class="qBtn">
                                            <a href="javascript:;" class="button secondary requiredNav"><i class="icon-search"></i></a>
                                        </div>
                                        <div class="qMedium"><div class="qSearch" style="display: none;">
                                                <div class="small-2 columns no-padding">
                                                    <span class="prefix"><i class="icon-search"></i></span>
                                                </div>

                                                <div id="divASVehicle" class="acList auto-search"><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul></div>
                                            </div><div class="small-10 columns qSearch no-padding" style="display: none;">
                                                <input type="text" class="qInput search-spinner requiredNav tCon treg ui-autocomplete-input" placeholder="Search" autocomplete="off">
                                            </div></div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-dropdown="dropNav" class="button secondary requiredNav"><i class="icon-angle-down"></i></a>
                                    </li>
                                </ul>
                                <ul id="dropNav" class="f-dropdown content" data-dropdown-content="">
                                    <li>
                                        <a href="search.aspx"><i class="icon-search"></i>Search</a>
                                    </li>
                                    <li>
                                        <a href="../report/vehicle/"><i class="icon-cv-reports"></i>Reports</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="qSmall"></div>
                        </div>
                    </header>
                </div>
                <div class="row">
                    <div id="cp_search_up1" style="display: none;">




                    </div>
                    <footer>
                        <script type="text/javascript">

                            function initAC() {
                                autoCompleteVehicle('.qInput', true, null, null, 'divASVehicle');
                            }
                            window.onload = function () {
                                initAC();
                            };
                        </script>

                    </footer>



                </div>

                <div id="cp_pVehicleEdit" class="pVehicleEdit">

                    <div class="row">
                        <div class="large-12 columns">


                            <div class="panel-form">
                                <section>

                                    <div class="row">
                                        <div class="medium-12 columns">
                                            <h3 class="no-margin">
                                            </h3>
                                            <p>

                                            </p>
                                            <!--

                                                    <small class="light">
                                                    <br>mil
                                                    <p>

                                                    </p>
                                                    <br />
                                                </small> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="large-6 columns">
                                            <div class="sub-panel border">
                                                <header>
                                                    Vehicle
                                                </header>
                                                <section>



                                                    <div class="small-12 columns no-margin no-padding hide" id="invalidVehicle">
                                                        <small class="label warning">
                                                            <i class="icon-warning-sign"></i>&nbsp;<div class="invalidVehicleMessage">Invalid Reg - Please add vehicle manually</div>
                                                        </small>
                                                        <br>
                                                        <br>
                                                    </div>
                                                    <br>



                                                    <div class="row ">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Search
                                                            </label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <div class="row collapse">
                                                                <div class="small-3 columns">
                                        <span class="prefix">
                                            <i class="icon-search"></i>
                                        </span>
                                                                </div>
                                                                <div class="small-9 columns">
                                                                    <input name="ctl00$cp$vEdit$tSearch" type="text" id="cp_vEdit_tSearch" class="tSearch ui-autocomplete-input" autocomplete="off">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row ">
                                                        <div class="medium-5 columns">
                                                            <label id="cp_vEdit_lRegistration" class="inline" required="">
                                                                Registration</label>
                                                            <input type="hidden" name="ctl00$cp$vEdit$_VehicleID" id="cp_vEdit__VehicleID">
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tReg" type="text" id="cp_vEdit_tReg" class="tReg" required="" data-abide-group="vehicle">
                                                            <small class="error">
                                                                Required
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-offset-5 medium-7 columns">
                                                            <p>
                                                                <small>

                                                                </small>
                                                            </p>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div id="cp_vEdit_divModelYear" class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Model Year
                                                            </label>
                                                        </div>
                                                        <div class="medium-5 columns">
                                                            <div id="cp_vEdit_dDropYear" class="AddYear AddYearDropdown">
                                                                <div class="select2-container select2 ddlYear" id="s2id_cp_vEdit_dYear"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">--Select--</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select name="ctl00$cp$vEdit$dYear" id="cp_vEdit_dYear" class="select2 ddlYear select2-offscreen" tabindex="-1">
                                                                    <option value="--Select--">--Select--</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">1999</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                    <option value="1989">1989</option>
                                                                    <option value="1988">1988</option>
                                                                    <option value="1987">1987</option>
                                                                    <option value="1986">1986</option>
                                                                    <option value="1985">1985</option>
                                                                    <option value="1984">1984</option>
                                                                    <option value="1983">1983</option>
                                                                    <option value="1982">1982</option>
                                                                    <option value="1981">1981</option>
                                                                    <option value="1980">1980</option>
                                                                    <option value="1979">1979</option>
                                                                    <option value="1978">1978</option>
                                                                    <option value="1977">1977</option>
                                                                    <option value="1976">1976</option>
                                                                    <option value="1975">1975</option>
                                                                    <option value="1974">1974</option>
                                                                    <option value="1973">1973</option>
                                                                    <option value="1972">1972</option>
                                                                    <option value="1971">1971</option>
                                                                    <option value="1970">1970</option>
                                                                    <option value="1969">1969</option>
                                                                    <option value="1968">1968</option>
                                                                    <option value="1967">1967</option>
                                                                    <option value="1966">1966</option>
                                                                    <option value="1965">1965</option>
                                                                    <option value="1964">1964</option>
                                                                    <option value="1963">1963</option>
                                                                    <option value="1962">1962</option>
                                                                    <option value="1961">1961</option>
                                                                    <option value="1960">1960</option>
                                                                    <option value="1959">1959</option>
                                                                    <option value="1958">1958</option>
                                                                    <option value="1957">1957</option>
                                                                    <option value="1956">1956</option>
                                                                    <option value="1955">1955</option>
                                                                    <option value="1954">1954</option>
                                                                    <option value="1953">1953</option>
                                                                    <option value="1952">1952</option>
                                                                    <option value="1951">1951</option>
                                                                    <option value="1950">1950</option>
                                                                    <option value="1949">1949</option>
                                                                    <option value="1948">1948</option>
                                                                    <option value="1947">1947</option>
                                                                    <option value="1946">1946</option>
                                                                    <option value="1945">1945</option>
                                                                    <option value="1944">1944</option>
                                                                    <option value="1943">1943</option>
                                                                    <option value="1942">1942</option>
                                                                    <option value="1941">1941</option>
                                                                    <option value="1940">1940</option>
                                                                    <option value="1939">1939</option>
                                                                    <option value="1938">1938</option>
                                                                    <option value="1937">1937</option>
                                                                    <option value="1936">1936</option>
                                                                    <option value="1935">1935</option>
                                                                    <option value="1934">1934</option>
                                                                    <option value="1933">1933</option>
                                                                    <option value="1932">1932</option>
                                                                    <option value="1931">1931</option>
                                                                    <option value="1930">1930</option>
                                                                    <option value="1929">1929</option>
                                                                    <option value="1928">1928</option>
                                                                    <option value="1927">1927</option>
                                                                    <option value="1926">1926</option>
                                                                    <option value="1925">1925</option>
                                                                    <option value="1924">1924</option>
                                                                    <option value="1923">1923</option>
                                                                    <option value="1922">1922</option>
                                                                    <option value="1921">1921</option>
                                                                    <option value="1920">1920</option>
                                                                    <option value="1919">1919</option>
                                                                    <option value="1918">1918</option>
                                                                    <option value="1917">1917</option>
                                                                    <option value="1916">1916</option>
                                                                    <option value="1915">1915</option>
                                                                    <option value="1914">1914</option>
                                                                    <option value="1913">1913</option>
                                                                    <option value="1912">1912</option>
                                                                    <option value="1911">1911</option>
                                                                    <option value="1910">1910</option>
                                                                    <option value="1909">1909</option>
                                                                    <option value="1908">1908</option>
                                                                    <option value="1907">1907</option>
                                                                    <option value="1906">1906</option>
                                                                    <option value="1905">1905</option>
                                                                    <option value="1904">1904</option>
                                                                    <option value="1903">1903</option>
                                                                    <option value="1902">1902</option>
                                                                    <option value="1901">1901</option>

                                                                </select>
                                                                <small class="error">
                                                                    Required
                                                                </small>
                                                            </div>
                                                            <div id="cp_vEdit_dNewYear" class="AddYear AddYearText hide">
                                                                <input type="hidden" name="ctl00$cp$vEdit$hfYear" id="cp_vEdit_hfYear">
                                                                <input name="ctl00$cp$vEdit$tbNewYear" type="text" maxlength="100" id="cp_vEdit_tbNewYear" class="tbDerr" placeholder="Model Year">
                                                                <small class="error">
                                                                    Required
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="medium-2 columns">
                                                            <a href="#!" class="toggleShowHideClass noFade AddYear AddYearDropdown" target-class="AddYear" onclick="clearAll()"><small><i class="icon-edit"></i>
                                                                    Edit</small></a>
                                                            <a href="#!" class="toggleShowHideClass noFade AddYear AddYearText hide" target-class="AddYear" onclick="clearAll()"><small><i class="icon-cross"></i>
                                                                </small></a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline" required="">
                                                                Make
                                                            </label>
                                                        </div>
                                                        <div class="medium-5 columns">
                                                            <div id="cp_vEdit_dDropMake" class="AddMake AddMakeDropdown">
                                                                <div class="select2-container select2 ddlMake" id="s2id_cp_vEdit_dMake"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen"> </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select name="ctl00$cp$vEdit$dMake" id="cp_vEdit_dMake" class="select2 ddlMake select2-offscreen" tabindex="-1">
                                                                    <option value=" "> </option>
                                                                    <option value="A47A22FA-C300-436D-AC39-4751AD9682DF">Abarth</option>
                                                                    <option value="3DF386B0-E10E-4FF3-8A6A-93A0AD63A582">Alfa Romeo</option>
                                                                    <option value="09F9DC93-E12E-4E48-B4C8-470BEC8C631D">Ashok Leyland</option>
                                                                    <option value="eca72960-f9be-4cf6-a210-995e65c57530">Aston Martin</option>
                                                                    <option value="5ed73db1-530e-4c7b-94be-998bc18bff26">Audi</option>
                                                                    <option value="fc0e34fd-c768-4ad8-b11b-50f3f2266f99">Bentley</option>
                                                                    <option value="a09cd2ec-c146-44cb-af28-7d67f6da9584">BMW</option>
                                                                    <option value="efc6d11b-d1af-4de3-842f-6c6687b7ebc9">Bugatti</option>
                                                                    <option value="1C640FBB-9DDC-44A3-8DBE-CA2023129927">Cadillac</option>
                                                                    <option value="8B435326-24EA-42CD-886D-1A83243F9AA5">Caterham</option>
                                                                    <option value="FFA0E319-8E23-4AAA-A39F-BD04806206EB">CHERY</option>
                                                                    <option value="DBC09093-E8DE-44B1-A37C-C40A638F436F">Chevrolet</option>
                                                                    <option value="C35F763A-7157-4B14-A437-14F2D15FD7F6">Chinkara</option>
                                                                    <option value="ed46c269-25c2-491f-b8d7-f4188338b72e">Chrysler</option>
                                                                    <option value="cb09d933-bbdb-434b-89d5-f3f6830aa484">Citroen</option>
                                                                    <option value="0AFC9C05-A9A5-4C64-8296-4F98FA6C9423">Corvette</option>
                                                                    <option value="AEF60647-E770-4E63-AAB4-E8E2C9C89C7A">Dacia</option>
                                                                    <option value="c3334a5d-bdd9-4c33-a93b-0502357f987c">Daewoo</option>
                                                                    <option value="e872eece-36a3-488a-a102-7b88e37c4ea7">Daihatsu</option>
                                                                    <option value="FFA0E319-8E23-4AAA-A39F-BD0480620703">DAIMLER</option>
                                                                    <option value="422E344C-7E83-4775-BC1C-9F1562361894">Datsun</option>
                                                                    <option value="DC399FEA-73C6-4BAE-8E70-CC8CFED78033">Dodge</option>
                                                                    <option value="FFA0E319-8E23-4AAA-A39F-BD0480620706">Dodge/Commer</option>
                                                                    <option value="5211C5D8-60E3-4746-8C3C-366725112525">FAW</option>
                                                                    <option value="e5e3d925-4bfd-4f66-b727-0ecb02ff2ae9">Ferrari</option>
                                                                    <option value="72246AD3-5BEB-496F-837C-C98D1A220988">Fiat</option>
                                                                    <option value="1F74D811-3994-4E3E-9013-BDA52D350B26">Force Motors</option>
                                                                    <option value="2f415912-7e75-409b-8d24-7a118cfb695f">Ford</option>
                                                                    <option value="0EC911FD-A739-46EA-AC81-54C35AB3CB0A">Foton</option>
                                                                    <option value="93F5B8E7-F643-4E90-9509-39417FAF36C4">GM</option>
                                                                    <option value="FFA0E319-8E23-4AAA-A39F-BD0480620719">Great Wall</option>
                                                                    <option value="5E633741-F28E-483A-A599-19C6E7574ED0">Gumpert</option>
                                                                    <option value="2E8E914A-B2E7-46DF-BFF2-964B60FE055D">GWM</option>
                                                                    <option value="F5D414E7-B4A8-4164-8807-EABD0ADB52E5">Hindustan Motors</option>
                                                                    <option value="88ab0495-7fc0-488a-81f6-bbc56e3e6ef6">Honda</option>
                                                                    <option value="FFA0E319-8E23-4AAA-A39F-BD0480620722">Hummer</option>
                                                                    <option value="4BBFFDA5-5B7B-4110-BF3C-397A07BB8EC6">Hyundai</option>
                                                                    <option value="1FEECA33-C586-4973-8AC9-3FFD7FA477E5">Infiniti</option>
                                                                    <option value="4CB3475D-3BE7-400C-829D-5F09FB8030FE">Isuzu</option>
                                                                    <option value="c451eccc-b882-480a-9506-94f47a3b6474">Jaguar</option>
                                                                    <option value="38DDD5EC-2A2F-4EA0-B1C2-8DD88D21F5AB">Jeep</option>
                                                                    <option value="48DBB910-F736-4E47-B219-A866D3A13D4F">Jensen</option>
                                                                    <option value="39B0FEA2-819A-493E-B52C-459614927318">JMC</option>
                                                                    <option value="9475F570-515E-4727-85A2-1EB774202A3E">Kia</option>
                                                                    <option value="461D5BB4-8495-419B-B7BB-72B31181C4ED">Koenigsegg</option>
                                                                    <option value="002E762F-C6AB-4A7E-85B3-03B109243804">Lamborghini</option>
                                                                    <option value="5CB36825-D33C-478C-82C7-2152FBCCDD24">Land Rover</option>
                                                                    <option value="7FC12F7C-200F-48B1-AE54-DBC3A09170BA">Lexus</option>
                                                                    <option value="316C3D65-E287-4316-A0EB-D7C3B7027875">Lotus</option>
                                                                    <option value="FB9C1DAD-933D-4E11-928C-358AF7E35755">Mahindra</option>
                                                                    <option value="399CF013-B56F-49B2-A9C3-58C08E3C44EF">Maruthi Suzuki</option>
                                                                    <option value="7DC85129-7CE6-4356-8B98-5D539F7B8A55">Maserati</option>
                                                                    <option value="6AA7B612-2A79-4F16-9ABD-9E34C870A3E8">Maybach</option>
                                                                    <option value="417916E2-50E1-4E2A-B3C6-325F4D9DE2DC">Mazda</option>
                                                                    <option value="B6D67240-4908-4DDB-9067-DCA22CB7E580">McLaren</option>
                                                                    <option value="E0565EF9-2B43-47F6-BF80-B2B611071E7E">Mercedes-Benz</option>
                                                                    <option value="DA016694-781A-4522-A002-DBD0C1A75EC1">MG</option>
                                                                    <option value="B2B7B7E1-7473-4B49-8267-AB2E9397B488">MG Motor UK</option>
                                                                    <option value="FFA0E319-8E23-4AAA-A39F-BD0480620767">MG-MGA</option>
                                                                    <option value="9A7CAB1E-3CC2-4BC1-B44B-25D8F1829B55">MINI</option>
                                                                    <option value="35B308E3-C103-4542-B4B9-BB6E2B2153E1">Mitsubishi</option>
                                                                    <option value="B7960657-D859-4141-9EAC-A98C2C6CF783">Morgan</option>
                                                                    <option value="FFA0E319-8E23-4AAA-A39F-BD0480620775">Naza</option>
                                                                    <option value="A8446FD1-C92E-4A51-A81A-F1D6F7256A1B">Nissan</option>
                                                                    <option value="84B7D23B-23CC-44D4-B378-20B155D45BE7">Opel</option>
                                                                    <option value="C8297B90-9818-49B7-B66C-8375E439FB9D">Perodua</option>
                                                                    <option value="a874a0c8-4dae-47f9-8099-4b62901f7711">Peugeot</option>
                                                                    <option value="8437621e-169b-4912-bc0a-f199fbaf2d65">Porsche</option>
                                                                    <option value="D9007B6D-8694-403E-BA09-470BCE3302F0">Premier</option>
                                                                    <option value="E5BEEA76-433A-4CE0-B687-CDA974004627">Proton</option>
                                                                    <option value="e4d97c10-e046-47c0-a2e2-c759a033c316">Renault</option>
                                                                    <option value="D4FB6C74-9FE1-4A29-A136-21031CB6651C">REVA</option>
                                                                    <option value="9C58C91F-EC6B-4642-8950-7035AD1485B9">Rolls-Royce</option>
                                                                    <option value="9FEDC340-F859-4A27-9D1E-AC68878B52D4">Saab</option>
                                                                    <option value="9D213547-8497-4EBC-973D-F08CB2D93B9B">Seat</option>
                                                                    <option value="3A05BB95-2BD6-4333-AF73-E4EFA811F1C1">Skoda</option>
                                                                    <option value="574843DC-09B6-4551-AD8C-7C2974923C29">Smart</option>
                                                                    <option value="91FB6F45-3A0A-402F-9843-C99F55CDDF11">SsangYong</option>
                                                                    <option value="54CA3C6D-D86B-4929-B78E-CD2ABBE98266">Subaru</option>
                                                                    <option value="c6a65e36-f8e2-4e4b-9650-46edefc25d7a">Suzuki</option>
                                                                    <option value="38EB9E8B-13E2-4256-A9F2-22636D3447E7">Tata</option>
                                                                    <option value="03EA2A4F-26CF-477C-B852-3C6D8551C41C">Toyota</option>
                                                                    <option value="C32BB559-870A-41CA-BA0B-A21BB9B31A90">TVR</option>
                                                                    <option value="89090cdf-c1be-4af7-bf8e-a112924516a8">Vauxhall</option>
                                                                    <option value="0caf869b-56d6-4ac9-9f30-01b563bdfd3a">Volkswagen</option>
                                                                    <option value="fc1b7146-51c6-4ec1-9498-31692507dda9">Volvo</option>
                                                                    <option value="4CF31181-D2B3-49F1-8638-2DF47BF77AEA">Westfield</option>
                                                                    <option value="87fd6f0d-ad9d-4a92-90cb-6cbde6138ffa">Yamaha</option>

                                                                </select>
                                                                <small class="error">
                                                                    Required" /&gt;
                                                                </small>
                                                            </div>
                                                            <div id="cp_vEdit_dNewMake" class="AddMake AddMakeText hide">
                                                                <input type="hidden" name="ctl00$cp$vEdit$hfMake" id="cp_vEdit_hfMake">
                                                                <input name="ctl00$cp$vEdit$tbNewMake" type="text" maxlength="100" id="cp_vEdit_tbNewMake" class="tbMake" placeholder="Make">
                                                                <small class="error">
                                                                    Required
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="medium-2 columns">
                                                            <a href="#!" class="toggleShowHideClass noFade AddMake AddMakeDropdown" target-class="AddMake" onclick="clearMake()"><small><i class="icon-edit"></i>
                                                                    Edit</small></a>
                                                            <a href="#!" class="toggleShowHideClass noFade AddMake AddMakeText hide" target-class="AddMake" onclick="clearMake()"><small><i class="icon-cross"></i>
                                                                </small></a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline" required="">
                                                                Model</label>
                                                        </div>
                                                        <div class="medium-5 columns">
                                                            <div id="cp_vEdit_dDropModel" class="AddModel AddModelDropdown">
                                                                <div class="select2-container select2 ddlModel" id="s2id_cp_vEdit_dModel"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen"></span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen3"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select name="ctl00$cp$vEdit$dModel" id="cp_vEdit_dModel" class="select2 ddlModel select2-offscreen" tabindex="-1">

                                                                </select>

                                                                <small class="error">
                                                                    Required
                                                                </small>
                                                            </div>
                                                            <div id="cp_vEdit_dNewModel" class="AddModel AddModelText hide">
                                                                <input type="hidden" name="ctl00$cp$vEdit$hfModel" id="cp_vEdit_hfModel">
                                                                <input type="hidden" name="ctl00$cp$vEdit$hfmObject" id="cp_vEdit_hfmObject">
                                                                <input name="ctl00$cp$vEdit$tbNewModel" type="text" maxlength="100" id="cp_vEdit_tbNewModel" class="tbModel" placeholder="Model">
                                                                <small class="error">
                                                                    Required
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="medium-2 columns">
                                                            <a href="#!" class="toggleShowHideClass noFade AddModel AddMakeDropdown" target-class="AddModel" onclick="clearModel()">
                                                                <small>
                                                                    <i class="icon-edit"></i>
                                                                    Edit
                                                                </small>
                                                            </a>
                                                            <a href="#!" class="toggleShowHideClass noFade AddModel AddModelText hide" target-class="AddModel" onclick="clearModel()"><small><i class="icon-cross"></i>
                                                                </small></a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Derivative
                                                            </label>
                                                        </div>
                                                        <div class="medium-5 columns">
                                                            <div id="cp_vEdit_dDropDeriv" class="AddDeriv AddDerivDropdown">
                                                                <div class="select2-container select2 ddlDeriv" id="s2id_cp_vEdit_dDerivative"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen"></span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen4"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select name="ctl00$cp$vEdit$dDerivative" id="cp_vEdit_dDerivative" class="select2 ddlDeriv select2-offscreen" tabindex="-1">

                                                                </select>
                                                                <small class="error">
                                                                    Required
                                                                </small>
                                                            </div>
                                                            <div id="cp_vEdit_dNewDeriv" class="AddDeriv AddDerivText hide">
                                                                <input type="hidden" name="ctl00$cp$vEdit$hfDerivative" id="cp_vEdit_hfDerivative">
                                                                <input name="ctl00$cp$vEdit$tbNewDeriv" type="text" maxlength="100" id="cp_vEdit_tbNewDeriv" class="tbDerr" placeholder="Derivative">
                                                                <small class="error">
                                                                    Required
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="medium-2 columns">
                                                            <a href="#!" class="toggleShowHideClass noFade AddDeriv AddDerivDropdown" target-class="AddDeriv" onclick="clearDeriv()"><small><i class="icon-edit"></i>
                                                                    Edit</small></a>
                                                            <a href="#!" class="toggleShowHideClass noFade AddDeriv AddDerivText hide" target-class="AddDeriv" onclick="clearDeriv()"><small><i class="icon-cross"></i>
                                                                </small></a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Vin</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbVin" type="text" maxlength="25" id="cp_vEdit_tbVin">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Reg Date</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbRegDate" type="text" maxlength="10" id="cp_vEdit_tbRegDate" class="datepicker">

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Date Of Manufacture</label>
                                                        </div>
                                                        <div id="cp_vEdit_divManufactureYear" class="medium-3 columns">
                                                            <div class="select2-container select2" id="s2id_cp_vEdit_ddlManufactureYear" style="width:100%;"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Select Year</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen5"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select name="ctl00$cp$vEdit$ddlManufactureYear" id="cp_vEdit_ddlManufactureYear" class="select2 select2-offscreen" onchange="BindDatePickerStandard(); ClearTBManufacture()" style="width:100%;" tabindex="-1">
                                                                <option value="Select Year">Select Year</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2009">2009</option>
                                                                <option value="2008">2008</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2001">2001</option>
                                                                <option value="2000">2000</option>
                                                                <option value="1999">1999</option>
                                                                <option value="1998">1998</option>
                                                                <option value="1997">1997</option>
                                                                <option value="1996">1996</option>
                                                                <option value="1995">1995</option>
                                                                <option value="1994">1994</option>
                                                                <option value="1993">1993</option>
                                                                <option value="1992">1992</option>
                                                                <option value="1991">1991</option>
                                                                <option value="1990">1990</option>
                                                                <option value="1989">1989</option>
                                                                <option value="1988">1988</option>
                                                                <option value="1987">1987</option>
                                                                <option value="1986">1986</option>
                                                                <option value="1985">1985</option>
                                                                <option value="1984">1984</option>
                                                                <option value="1983">1983</option>
                                                                <option value="1982">1982</option>
                                                                <option value="1981">1981</option>
                                                                <option value="1980">1980</option>
                                                                <option value="1979">1979</option>
                                                                <option value="1978">1978</option>
                                                                <option value="1977">1977</option>
                                                                <option value="1976">1976</option>
                                                                <option value="1975">1975</option>
                                                                <option value="1974">1974</option>
                                                                <option value="1973">1973</option>
                                                                <option value="1972">1972</option>
                                                                <option value="1971">1971</option>
                                                                <option value="1970">1970</option>
                                                                <option value="1969">1969</option>
                                                                <option value="1968">1968</option>
                                                                <option value="1967">1967</option>
                                                                <option value="1966">1966</option>
                                                                <option value="1965">1965</option>
                                                                <option value="1964">1964</option>
                                                                <option value="1963">1963</option>
                                                                <option value="1962">1962</option>
                                                                <option value="1961">1961</option>
                                                                <option value="1960">1960</option>
                                                                <option value="1959">1959</option>
                                                                <option value="1958">1958</option>
                                                                <option value="1957">1957</option>
                                                                <option value="1956">1956</option>
                                                                <option value="1955">1955</option>
                                                                <option value="1954">1954</option>
                                                                <option value="1953">1953</option>
                                                                <option value="1952">1952</option>
                                                                <option value="1951">1951</option>
                                                                <option value="1950">1950</option>
                                                                <option value="1949">1949</option>
                                                                <option value="1948">1948</option>
                                                                <option value="1947">1947</option>
                                                                <option value="1946">1946</option>
                                                                <option value="1945">1945</option>
                                                                <option value="1944">1944</option>
                                                                <option value="1943">1943</option>
                                                                <option value="1942">1942</option>
                                                                <option value="1941">1941</option>
                                                                <option value="1940">1940</option>
                                                                <option value="1939">1939</option>
                                                                <option value="1938">1938</option>
                                                                <option value="1937">1937</option>
                                                                <option value="1936">1936</option>
                                                                <option value="1935">1935</option>
                                                                <option value="1934">1934</option>
                                                                <option value="1933">1933</option>
                                                                <option value="1932">1932</option>
                                                                <option value="1931">1931</option>
                                                                <option value="1930">1930</option>
                                                                <option value="1929">1929</option>
                                                                <option value="1928">1928</option>
                                                                <option value="1927">1927</option>
                                                                <option value="1926">1926</option>
                                                                <option value="1925">1925</option>
                                                                <option value="1924">1924</option>
                                                                <option value="1923">1923</option>
                                                                <option value="1922">1922</option>
                                                                <option value="1921">1921</option>
                                                                <option value="1920">1920</option>
                                                                <option value="1919">1919</option>
                                                                <option value="1918">1918</option>
                                                                <option value="1917">1917</option>
                                                                <option value="1916">1916</option>
                                                                <option value="1915">1915</option>
                                                                <option value="1914">1914</option>
                                                                <option value="1913">1913</option>
                                                                <option value="1912">1912</option>
                                                                <option value="1911">1911</option>
                                                                <option value="1910">1910</option>
                                                                <option value="1909">1909</option>
                                                                <option value="1908">1908</option>
                                                                <option value="1907">1907</option>
                                                                <option value="1906">1906</option>
                                                                <option value="1905">1905</option>
                                                                <option value="1904">1904</option>
                                                                <option value="1903">1903</option>
                                                                <option value="1902">1902</option>
                                                                <option value="1901">1901</option>

                                                            </select>
                                                        </div>
                                                        <div id="cp_vEdit_divManufactureDate" class="medium-4 columns">
                                                            <input name="ctl00$cp$vEdit$tbManufactureDate" type="text" maxlength="10" id="cp_vEdit_tbManufactureDate" class="datepicker2" placeholder="Select Date">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Odometer Reading</label>
                                                        </div>
                                                        <div class="medium-3 columns">
                                                            <input name="ctl00$cp$vEdit$tbMileage" type="text" maxlength="10" id="cp_vEdit_tbMileage" pattern="integer">
                                                            <small class="error">
                                                                Number Required</small>
                                                        </div>
                                                        <div class="medium-4 columns">
                                                            <div class="select2-container select2" id="s2id_cp_vEdit_ddlOdometerMeasure" style="width:100%;"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Miles</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen6"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select name="ctl00$cp$vEdit$ddlOdometerMeasure" id="cp_vEdit_ddlOdometerMeasure" class="select2 select2-offscreen" style="width:100%;" tabindex="-1">
                                                                <option value="3A4985A7-E116-4CAE-909C-A3E6A6B27C78">Kilometers</option>
                                                                <option selected="selected" value="9C761602-C11D-4953-A545-AE53F44512C4">Miles</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Colour</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbColour" type="text" maxlength="25" id="cp_vEdit_tbColour">
                                                        </div>
                                                    </div>
                                                    <div class="row veh-paint veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Paint Code</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbpaint" type="text" maxlength="25" id="cp_vEdit_tbpaint" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row veh-trim veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Trim</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbTrim" type="text" maxlength="25" id="cp_vEdit_tbTrim" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Fuel</label>
                                                        </div>

                                                        <div class="medium-7 columns">
                                                            <div class="select2-container select2 fuelType" id="s2id_cp_vEdit_ddlFuel"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Select fuel..</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen7"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select name="ctl00$cp$vEdit$ddlFuel" id="cp_vEdit_ddlFuel" class="select2 fuelType select2-offscreen" tabindex="-1">
                                                                <option value="SELECTFUEL">Select fuel..</option>
                                                                <option value="PETROL">Petrol</option>
                                                                <option value="DIESEL">Diesel</option>
                                                                <option value="ELECTRIC">Electric</option>
                                                                <option value="HYBRID">Hybrid</option>
                                                                <option value="LPG">LPG</option>
                                                                <option value="CNG">CNG</option>
                                                                <option value="OTHER">Other</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="row veh-doorplan veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Door Plan</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbdoor" type="text" maxlength="25" id="cp_vEdit_tbdoor" value="">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <br>
                                                            <label for=""><strong>Gearbox &amp; Engine No</strong></label>
                                                            <hr class="no-margin">
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Gear Box</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbGear" type="text" maxlength="25" id="cp_vEdit_tbGear">
                                                        </div>
                                                    </div>
                                                    <div class="row veh-gearboxno veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Gear Box No</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbGearNo" type="text" maxlength="25" id="cp_vEdit_tbGearNo" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row veh-co2Emissions veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                CO2 Emissions</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbco2" type="text" maxlength="10" id="cp_vEdit_tbco2" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row veh-engineno veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Engine No</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbengno" type="text" maxlength="25" id="cp_vEdit_tbengno" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row veh-engineno veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Engine Code</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbenginecode" type="text" maxlength="100" id="cp_vEdit_tbenginecode" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Engine Size</label>
                                                        </div>
                                                        <div class="medium-4 columns inline">
                                                            <input name="ctl00$cp$vEdit$tbengsize" type="text" maxlength="10" id="cp_vEdit_tbengsize" onkeyup="convertToLitre(this);">
                                                        </div>
                                                        <div id="Lconvert" class="medium-3 columns">
                                                            <b>
                                                                <label class="inline" id="lLitre"></label>
                                                            </b>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Power</label>
                                                        </div>
                                                        <div class="medium-7 columns inline">
                                                            <input name="ctl00$cp$vEdit$tbPower" type="text" maxlength="25" id="cp_vEdit_tbPower">
                                                        </div>
                                                    </div>
                                                    <!--
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Cylinders</label>
                                                        </div>
                                                        <div class="medium-7 columns inline">
                                                            <input name="ctl00$cp$vEdit$tbCylinder" type="text" id="cp_vEdit_tbCylinder" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Valves</label>
                                                        </div>
                                                        <div class="medium-7 columns inline">
                                                            <input name="ctl00$cp$vEdit$tbValves" type="text" id="cp_vEdit_tbValves" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Drive Type</label>
                                                        </div>
                                                        <div class="medium-7 columns inline">
                                                            <input name="ctl00$cp$vEdit$tbDriveType" type="text" id="cp_vEdit_tbDriveType" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Fuel Mixture Formation</label>
                                                        </div>
                                                        <div class="medium-7 columns inline">
                                                            <input name="ctl00$cp$vEdit$tbFuelMix" type="text" id="cp_vEdit_tbFuelMix" />
                                                        </div>
                                                    </div>
                            -->


                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <br>
                                                            <label for=""><strong>Key No &amp; Radio No</strong></label>
                                                            <hr class="no-margin">
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="row veh-keyno veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Key No</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbKey" type="text" maxlength="50" id="cp_vEdit_tbKey" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row veh-radiono veh-field">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Radio No</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbRadio" type="text" maxlength="50" id="cp_vEdit_tbRadio" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <br>
                                                            <label for=""><strong>Reminders</strong></label>
                                                            <hr class="no-margin">
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                MOT Due Date</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbMOT" type="text" maxlength="10" id="cp_vEdit_tbMOT" class="datepicker">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Service Due Date</label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbService" type="text" maxlength="10" id="cp_vEdit_tbService" class="datepicker">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                            <label class="inline">
                                                                Warranty Ends
                                                            </label>
                                                        </div>
                                                        <div class="medium-7 columns">
                                                            <input name="ctl00$cp$vEdit$tbWarranty" type="text" maxlength="10" id="cp_vEdit_tbWarranty" class="datepicker">
                                                        </div>
                                                    </div>
                                                    <div id="cp_vEdit_pNotes">

                                                        <header>
                                                            Notes
                                                        </header>
                                                        <section>
                                                            <div class="row">
                                                                <div class="large-12 columns">
                                                                    <textarea name="ctl00$cp$vEdit$tbEditNote" rows="2" cols="20" id="cp_vEdit_tbEditNote" class="one-line autosize" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 26px;"></textarea>
                                                                </div>
                                                            </div>
                                                        </section>

                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-5 columns">
                                                        </div>
                                                        <div class="medium-7 columns">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="medium-12 columns">
                                                            <p class="str-veh-hidden hide"><small class="light"><strong class="count-hidden"></strong>Hidden Fields <strong class="count-hidden-values"></strong><a href="#!" class="show-all-veh-field">Show hidden fields</a></small></p>
                                                        </div>
                                                    </div>
                                                </section>
                                                <footer>
                                                    <div class="row">
                                                        <div class="medium-12 columns text-right">
                                                            <input type="submit" name="ctl00$cp$vEdit$bedit" value="Save" id="cp_vEdit_bedit" class="button confirm success large pull-right scrollUpParent loading" required="" data-abide-group="vehicle" formnovalidate="">
                                                            <div class="hide processing pull-right">
                                                                <i class="icon-spinner icon-spin"></i>
                                                            </div>
                                                            <a href="javascript:;" class="button large plain text footer-menu" data-dropdown="dropFooterVeh">
                                                                <i></i>
                                                                <div class="hide-for-small">Options</div>
                                                            </a>
                                                            <ul id="dropFooterVeh" class="f-dropdown content" data-dropdown-content="">
                                                                <li>

                                                                </li>
                                                                <li>
                                                                    <a href="#" data-reveal-id="settingsModal">
                                                                        <i class="icon-cog"></i>Page Settings
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="large-6 columns">

                                            <br>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </div>

                </div>





                <div id="settingsModal" class="reveal-modal small">
                    <h6><i class="icon-cog"></i>
                        Page Settings</h6>
                    <br>
                    <label>
                        Show / Hide Fields</label>
                    <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
                        <li class="inline">
                            <input type="checkbox" id="veh-trim" class="chk-veh-trim" checked="">
                            <label for="veh-trim" class="inline">
                                Trim
                            </label>
                        </li>
                        <li class="inline">
                            <input type="checkbox" id="veh-doorplan" class="chk-veh-doorplan" checked="">
                            <label for="veh-doorplan" class="inline">
                                Door Plan
                            </label>
                        </li>
                        <li class="inline">
                            <input type="checkbox" id="veh-gearboxno" class="chk-veh-gearboxno" checked="">
                            <label for="veh-gearboxno" class="inline">
                                Gear Box No
                            </label>
                        </li>
                        <li class="inline">
                            <input type="checkbox" id="veh-co2Emissions" class="chk-veh-co2Emissions" checked="">
                            <label for="veh-co2Emissions" class="inline">
                                CO2 Emissions
                            </label>
                        </li>
                        <li class="inline">
                            <input type="checkbox" id="veh-engineno" class="chk-veh-engineno" checked="">
                            <label for="veh-engineno" class="inline">
                                Engine No
                            </label>
                        </li>
                        <li class="inline">
                            <input type="checkbox" id="veh-keyno" class="chk-veh-keyno" checked="">
                            <label for="veh-keyno" class="inline">
                                Key No
                            </label>
                        </li>
                        <li class="inline">
                            <input type="checkbox" id="veh-radiono" class="chk-veh-radiono" checked="">
                            <label for="veh-radiono" class="inline">
                                Radio No
                            </label>
                        </li>
                    </ul>
                    <a class="close-reveal-modal" style="color: #06a25e">×</a>
                </div>
                <input type="hidden" class="mxp" id="hfPage" value="Vehicle: Add/Edit Viewed">

                <!-- END MAIN CONTENT -->
            </div>

        </div>

        <script type="text/javascript">
            function resizeIframe(iframe) {
                iframe.height = iframe.contentWindow.document.body.scrollHeight + "px";
            }
        </script>

        <div id="generic-modal-Invoice" class="reveal-modal full-modal" style="padding: 0px">
            <iframe id="iInvoice" style="width: 100%; border: 0px; overflow-y: hidden;" onload="resizeIframe(this);" height="0px"></iframe>
            <a class="close-reveal-modal close-full-modal" onclick="CloseInvoiceModal('');"><i class="icon-cross"></i></a>
        </div>

        <div id="generic-modal" class="reveal-modal full-modal" style="padding: 0px">
            <iframe id="igeneric" style="width: 100%; border: 0px; overflow-y: hidden;" onload="resizeIframe(this);" height="0px"></iframe>
            <a class="close-reveal-modal close-full-modal" onclick="setGenericModal('');"><i class="icon-cross"></i></a>
        </div>

        <div id="about-modal" class="reveal-modal small" style="padding: 0">
            <iframe id="iabout" src="/Modal/about.aspx" style="width: 100%; border: 0px; overflow-y: hidden;" onload="resizeIframe(this);" height="0px"></iframe>
            <a class="close-reveal-modal close-full-modal"><i class="icon-cross"></i></a>
        </div>

        <div id="repair-modal" class="reveal-modal small" style="padding: 0">
            <iframe id="irepair" src="/Modal/addrepairtemplate.aspx" style="width: 100%; border: 0px; min-height: 260px; overflow-y: hidden;" onload="resizeIframe(this);" height="0px"></iframe>
            <a class="close-reveal-modal close-full-modal"><i class="icon-cross"></i></a>
        </div>


    </div>
</div>
@yield('content')
</body>
</html>