    <article>
      <section class="question-header">
        <fieldset class="title">
            <legend>Question <?php echo $question_number; ?></legend>
        </fieldset>
      </section>
      <section class="question">
        <h4><?php echo $question; ?></h4>
        <div class="select-style">
          <select>
            <option>This is the first option</option>
            <option>The second option</option>
            <option>The third option</option>
          </select>
        </div>
      </section>
      <section class="content-footer">
        <a href="/<?php echo $next_page; ?>" class="button button-next button-pulse"><?php echo $next_page_text; ?> <span class="chevron right"></span></a>
      </section>
    </article>
