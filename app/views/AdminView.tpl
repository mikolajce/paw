{extends file="main.tpl"}

{block name=content}

<div id="main-wrapper">
  <div class="container">
    <div class="row gtr-200">
      <!--
      <div class="col-4 col-12-medium">

        <!-- Sidebar
          <div id="sidebar">
            <section class="widget thumbnails">
              <h3>Siemano kolano</h3>
              <div class="grid">
                <div class="row gtr-50">
                  <div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
                  <div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
                  <div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
                  <div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
                </div>
              </div>
              <a href="#" class="button icon fa-file-alt">Więcej</a>
            </section>
          </div>

      </div>
      -->
      <div class="col-8 col-12-medium imp-medium">
          <div id="content">
            <section class="last">
              <h2>Lista użytkowników</h2>
              <p>Tutaj możesz nadawać oraz odbierać uprawnienia administratorskie użytkownikom, oraz zarządzać kontami.</p>
              <table>
                <thead>
                  <th>Login</th>
                  <th>Hasło</th>
                  <th>Imię</th>
                  <th>Nazwisko</th>
                  <th>Email</th>
                  <th>Zarządzanie</th>
                </thead>
                <tbody>
                  {foreach $lista as $row}
                    <tr>
                      <td>{$row["login"]}</td>
                      <td>[REDACTED]</td>
                      <td>{$row["imie"]}</td>
                      <td>{$row["nazwisko"]}</td>
                      <td>{$row["email"]}</td>
                      <td>
                        <a href="{$conf->action_url}adminDelete/{$row['id_uzytkownik']}" class="button small">Skasuj</a>
                      </td>
                    </tr>
                  {/foreach}
                </tbody>
              </table>
            </section>
          </div>

      </div>
      <div class="col-4 col-12-medium imp-medium">
          <div id="content">
            <section class="last">
              <h2>&nbsp;</h2>
              <p>&nbsp;</p>
              <table>
                <thead>
                  <th>Uprawnienia</th>
                  <th></th>
                </thead>
                <tbody>
                  {foreach $upra as $row}
                    <tr>
                      <td>
                        {if $row["id_rola"]=='1'}
                          Administrator
                        {elseif $row["id_rola"]=='2'}
                          Pracownik
                        {else}
                          Użytkownik
                        {/if}
                      </td>
                      <td>
                        {if $row["id_rola"]=='1'}
                          <a href="{$conf->action_url}adminRevoke/{$row['id_uzytkownik']}" class="button alt small">Odbierz</a>
                        {else}
                          <a href="{$conf->action_url}adminPromote/{$row['id_uzytkownik']}" class="button alt small">Nadaj</a>
                        {/if}
                      </td>
                    </tr>
                  {/foreach}
                </tbody>
              </table>
            </section>
          </div>

      </div>
    </div>
  </div>
</div>

{/block}
