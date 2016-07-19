<table class="row article-intro">
  <tr>
    <td class="wrapper last">
      <table class="twelve columns">
        <tr>
          <td>


            <div class="content-padding">
              <div class="intro-image">
                <?php print render($content['field_newsletter_intro_image']); ?>
              </div>
              <?php if (!empty($content['body'])): ?>
                <div class="intro-text">
                  <?php print render($content['body']); ?>
                </div>
              <?php endif; ?>
            </div>
          </td>
          <td class="expander"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
