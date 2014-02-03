    <article class="welcome-article">
      <section class="welcome">
        <fieldset class="title">
            <legend>&ldquo;Ale Oracle, help me!&rdquo;</legend>
        </fieldset>
      </section>
      <?php if ($sliders) : ?>
      <section>
        <div class="simply-scroll simply-scroll-container">
          <div class="simply-scroll-clip">
            <ul class="social-scroller simply-scroll-list">
              <?php foreach ($sliders as $slider) : ?>
                <li>
                  <div class="slider-thumbs">
                    <img src="/assets/img/profiles/thumbs/profile-<?php echo $slider['id']; ?>.jpg" width="40" height="40" class="thumb">
                    <img src="/assets/img/ales/thumbs/ale-<?php echo $slider['ale']; ?>.jpg" width="40" height="40" class="thumb">
                  </div>
                  <h5><?php echo $slider['ale_name']; ?></h5>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </section>
      <?php endif; ?>
      <section class="content-footer">
        <h5>3 quick questions and The Ale Oracle will recommend a matching ale!</h5>
        <a href="/<?php echo $next_page; ?>" class="button button-next button-pulse"><?php echo $next_page_text; ?> <span class="chevron right"></span></a>
      </section>
    </article>
