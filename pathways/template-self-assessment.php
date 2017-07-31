<?php
/*
  Template Name: Self Assessment Form
*/

get_header(); ?>


<div id="main-content">
	<div class="container">

		<?php
		while ( have_posts() ) : the_post(); ?>

					<div class="entry-content">

						<?php
	                    	the_content();

	                    	wp_link_pages( "\t\t\t\t\t<div class='page-link'>" . __( 'Pages: ', 'thematic' ), "</div>\n", 'number' );

	                    	edit_post_link( __( 'Edit', 'thematic' ), "\n\t\t\t\t\t\t" . '<span class="edit-link">' , '</span>' . "\n" );
	                    ?>

	                    <?php if(isset($_POST['submitAssessment'])): ?>

							<?php //print_r($_POST); ?>

							<h2>Trustworthiness</h2>

							<?php
							$overall = 0;

							foreach($_POST as $key => $value) {
								if($key != 'submitAssessment') $overall += intval($value);
							}

							$overall = number_format(($overall - 24)*100/48, 0);

							$sincerity = $_POST['q16'] + $_POST['q17'] + $_POST['q21'];
							$competence = $_POST['q9'] + $_POST['q14'] + $_POST['q15'];
							$reliability = $_POST['q7'] + $_POST['q11'] + $_POST['q13'];
							$care = $_POST['q4'] + $_POST['q19'] + $_POST['q23'];
							$attention = $_POST['q12'] + $_POST['q20'] + $_POST['q22'];
							$build = $_POST['q3'] + $_POST['q8'] + $_POST['q24'];
							$maintain = $_POST['q5'] + $_POST['q10'] + $_POST['q18'];
							$restore = $_POST['q1'] + $_POST['q2'] + $_POST['q6'];
							?>

							<h3 style="text-align: left;">Based on your responses your overall Self Trust Score is <?php echo $overall; ?>%</strong></h3>
							<p>(Scores of 0-33% indicate LOW Trust; 34-66% indicates AVERAGE levels of Trust; 67-100% indicates HIGH Trust)</p>

							<p>The Trust Score is made up of the following dimensions. The grading comes from your survey responses. <br />To improve your score focus on the dimensions with a rating of LOW or MEDIUM</p>

							<p>Assessments  of Trust are the judgments and opinions we have of another’s sincerity, <br />competence, reliability, and care when working together.</p>
							<ul>
								<li><strong>Sincerity:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo get_score_word($sincerity);?></li>
								<li><strong>Competency:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo get_score_word($competence); ?></li>
								<li><strong>Reliability:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo get_score_word($reliability); ?></li>
								<li><strong>Care:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo get_score_word($care); ?></li>
							</ul>

							<p>Trust can only be built if we are willing to engage in conversation about the working relationship.</p>
							<ul>
								<li><strong>Attention to Trust:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo get_score_word($attention); ?></li>
							</ul>

							<p>The levels of trust depend on the actions we take to build, maintain and restore trust.</p>

							<ul>
								<li><strong>Build:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo get_score_word($build); ?></li>
								<li><strong>Maintain:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo get_score_word($maintain); ?></li>
								<li><strong>Restore:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo get_score_word($restore); ?></li>
							</ul>

							<p>If you would like to learn more about how working with these dimensions of trust can help you create <br />high performing organizations; and to explore how to open up the topic of trust in your organization, <br />in a non-threatening and productive way, please contact Richard at: richard@pathwaysofgrowth.com <br />or call (860) 857-3588.</p>
							<?php

							?>

						<?php else : ?>

						<script type="text/javascript">
							$(window).ready(function() {

							});
						</script>

	                    <form name="selfAssessment" method="POST" action="<?php the_permalink(); ?>">

		                    <table id="selfAssessment">
		                    	<tr>
		                    		<th></th>
		                    		<th>STATEMENT</th>
		                    		<th>Rarely</th>
		                    		<th>Sometimes</th>
		                    		<th>Usually</th>
		                    	</tr>
								<tr>
									<td>1</td>
									<td>Acknowledge role in a missed commitment</td>
									<td class="radio">
										<input type="radio" name="q1" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q1" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q1" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Apologize for letting a colleague/client down</td>
									<td class="radio">
										<input type="radio" name="q2" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q2" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q2" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Complain to colleagues who fail to deliver on their promises</td>
									<td class="radio">
										<input type="radio" name="q3" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q3" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q3" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Do what is good for colleague/client even if it conflicts with your personal interests</td>
									<td class="radio">
										<input type="radio" name="q4" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q4" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q4" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Help your colleagues/clients deliver on their commitments</td>
									<td class="radio">
										<input type="radio" name="q5" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q5" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q5" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Make amends for breaking a promise</td>
									<td class="radio">
										<input type="radio" name="q6" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q6" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q6" value="3"/>
		                    		</td>								</tr>
								<tr>
									<td>7</td>
									<td>Renegotiate delivery dates if delays are unavoidable</td>
									<td class="radio">
										<input type="radio" name="q7" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q7" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q7" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Speak positively about colleagues' strengths outside of the team</td>
									<td class="radio">
										<input type="radio" name="q8" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q8" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q8" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Address productivity issues with your colleagues and/or clients</td>
									<td class="radio">
										<input type="radio" name="q9" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q9" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q9" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Ask for help if you don't have the answer</td>
									<td class="radio">
										<input type="radio" name="q10" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q10" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q10" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>11</td>
									<td>Deliver your commitments on time</td>
									<td class="radio">
										<input type="radio" name="q11" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q11" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q11" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>12</td>
									<td>Establish a climate of respect and trust</td>
									<td class="radio">
										<input type="radio" name="q12" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q12" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q12" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>13</td>
									<td>Hold others accountable for delivering goals</td>
									<td class="radio">
										<input type="radio" name="q13" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q13" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q13" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Make self-growth and development a priority</td>
									<td class="radio">
										<input type="radio" name="q14" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q14" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q14" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Resolve conflict with colleagues</td>
									<td class="radio">
										<input type="radio" name="q15" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q15" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q15" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Support your colleagues/clients in public</td>
									<td class="radio">
										<input type="radio" name="q16" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q16" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q16" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>17</td>
									<td>Admit openly if you don't have an answer</td>
									<td class="radio">
										<input type="radio" name="q17" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q17" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q17" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>18</td>
									<td>Communicate openly and clearly</td>
									<td class="radio">
										<input type="radio" name="q18" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q18" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q18" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>19</td>
									<td>Demonstrate commitment to colleagues' success</td>
									<td class="radio">
										<input type="radio" name="q19" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q19" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q19" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>20</td>
									<td>Have conversations about concerns with staff</td>
									<td class="radio">
										<input type="radio" name="q20" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q20" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q20" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>21</td>
									<td>Keep your word to your colleagues/clients</td>
									<td class="radio">
										<input type="radio" name="q21" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q21" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q21" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Raise issues of trust directly with colleagues/clients</td>
									<td class="radio">
										<input type="radio" name="q22" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q22" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q22" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>23</td>
									<td>Show respect for the concerns of all colleagues/clients</td>
									<td class="radio">
										<input type="radio" name="q23" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q23" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q23" value="3"/>
		                    		</td>
								</tr>
								<tr>
									<td>24</td>
									<td>Thank staff for meeting their commitments</td>
									<td class="radio">
										<input type="radio" name="q24" value="1"/>
									</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q24" value="2"/>
		                    		</td>
		                    		<td class="radio">
			                    		<input type="radio" name="q24" value="3"/>
		                    		</td>
								</tr>

							</table>

							<p align="center"><input type="submit" name="submitAssessment" id="submitAssessment" value="Submit"/></p>


							<script type="text/javascript">

							$(window).ready(function() {
								$('#submitAssessment').click(function() {
									if($('#selfAssessment input[type="radio"]:checked').length == 24) {
										return true;
									} else {
										alert("Please select an answer for all questions.");
										/*$('#selfAssessment input[type="radio"]').each(function() {
											if($(this).attr('checked') != "checked") {
												$(this).css({
													'border': '1px solid red'
												});
											}
										});*/
										return false;
									}
								});
							});

							</script>
	                    </form>

	                    <?php endif; ?>

					</div><!-- .entry-content -->

		<?php endwhile; // End of the loop.
		?>

	</div>
</div>

<?php get_template_part( 'blog', 'footer' ); ?>

<?php get_footer(); ?>
