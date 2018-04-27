<?php
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<div id="wpbody" role="main">
    <div id="wpbody-content" aria-label="Main content" tabindex="0" style="overflow: hidden;">
        <h1><?php _e( "Postem Ipsum", POSTEM_IPSUM_TEXT_DOMAIN ); ?></h1>
        <div class="wrap">
            <form id="postem-ipsum-generation" method="post" action="options.php">
				<?php settings_fields( 'postem-ipsum-general-settings' ); ?>
				<?php do_settings_sections( 'postem-ipsum-general-settings' ); ?>
                <h1 class="table_header">
                    <span class="dashicons dashicons-admin-generic"></span> <?php _e( "General Settings", POSTEM_IPSUM_TEXT_DOMAIN ); ?>
                    <span class="header_icon dashicons dashicons-arrow-up-alt2"></span></h1>
                <hr>
                <div class="slider table_container">
                    <table class="form-table widefat">
                        <tr>
                            <th scope="row"><?php _e( 'Select Post Type', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_post_type" id="postem_ipsum_post_type">
                                    <option value="0"
                                            selected><?php _e( 'Select a post type', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
									<?php foreach ( $post_types as $post_type ): ?>
										<?php if ( $post_type->name != "attachment" && $post_type->name != "page" && $post_type->name != "product" ): ?>
                                            <option value="<?php echo $post_type->name; ?>"><?php echo $post_type->labels->name; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
                                </select>
                            </td>
                        </tr>

                        <tr class="select_taxonomy">
                            <th scope="row"><?php _e( 'Select Taxonomy', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_taxonomy" id="postem_ipsum_taxonomy">
                                    <option value="0"
                                            selected><?php _e( 'Select a taxonomy', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>

                        <tr class="select_term">
                            <th scope="row"><?php _e( 'Select Category/Term', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_term" id="postem_ipsum_term">
                                    <option value="0"
                                            selected><?php _e( 'Select a term', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'How many posts', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <input type="number" min="1" step="1" name="postem_ipsum_post_number"
                                       id="postem_ipsum_post_number" value="1">
                            </td>
                        </tr>
                    </table>
                </div>
                <h1 class="table_header">
                    <span class="dashicons dashicons-welcome-write-blog"></span> <?php _e( "Post Content Settings", POSTEM_IPSUM_TEXT_DOMAIN ); ?>
                    <span class="header_icon dashicons dashicons-arrow-up-alt2"></span>
                </h1>
                <hr>
                <div class="slider  table_container">
                    <table class="form-table widefat">
                        <tr>
                            <th scope="row"><?php _e( 'Paragraphs', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <input type="number" min="1" max="5" step="1" name="postem_ipsum_paragraphs"
                                       id="postem_ipsum_paragraphs" value="1">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'The average length of a paragraph', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_length" id="postem_ipsum_paragraph_length">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="short"><?php _e( 'Short', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="medium"><?php _e( 'Medium', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="long"><?php _e( 'Long', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="verylong"><?php _e( 'Very Long', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'Decorate text?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_decorate" id="postem_ipsum_paragraph_decorate">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'Links?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_links" id="postem_ipsum_paragraph_links">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'Unordered lists?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_ul" id="postem_ipsum_paragraph_ul">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'Ordered lists?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_ol" id="postem_ipsum_paragraph_ol">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'Description lists?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_dl" id="postem_ipsum_paragraph_dl">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'Blockquotes?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_bq" id="postem_ipsum_paragraph_bq">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'Code?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_code" id="postem_ipsum_paragraph_code">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><?php _e( 'Headers?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_paragraph_header" id="postem_ipsum_paragraph_header">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <h1 class="table_header">
                    <span class="dashicons dashicons-format-image"></span>
					<?php _e( "Featured Image Settings", POSTEM_IPSUM_TEXT_DOMAIN ); ?>
                    <span class="header_icon dashicons dashicons-arrow-up-alt2"></span>
                </h1>
                <hr>
                <div class="slider  table_container postem_ipsum_image_table">
                    <table class="form-table widefat">
                        <tr>
                            <th scope="row"><?php _e( 'Featured Image?', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <select name="postem_ipsum_featured_image" id="postem_ipsum_featured_image">
                                    <option value="0"><?php _e( 'Select an option', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="yes"><?php _e( 'Yes', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                    <option value="no"><?php _e( 'No', POSTEM_IPSUM_TEXT_DOMAIN ); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr class="postem_ipsum_image_color" style="display: none;">
                            <th scope="row"><?php _e( 'Image Color', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td style="height: 0px;">
                                <label style="float: left; margin-top: 5px;"><?php _e( 'Random', POSTEM_IPSUM_TEXT_DOMAIN ); ?>
                                    : </label>
                                <input type="checkbox" name="bg_random" id="bg_random"
                                       style="float: left; margin: 5px 10px 0 5px;">
                                <input class="color-field" type="text" name="postem_ipsum_featured_image_bg"
                                       id="postem_ipsum_featured_image_bg" value="" style="float: left; width: 80%;">
                            </td>
                        </tr>
                        <tr class="postem_ipsum_image_w" style="display: none;">
                            <th scope="row"><?php _e( 'Image Width', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <input type="number" min="10" step="10" name="postem_ipsum_image_w"
                                       id="postem_ipsum_image_w" value="300">
                            </td>
                        </tr>

                        <tr class="postem_ipsum_image_h" style="display: none;">
                            <th scope="row"><?php _e( 'Image Height', POSTEM_IPSUM_TEXT_DOMAIN ); ?></th>
                            <td>
                                <input type="number" min="10" step="10" name="postem_ipsum_image_h"
                                       id="postem_ipsum_image_h" value="300">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <button class="button button-primary postem-ipsum-generate"><?php _e( "Generate", POSTEM_IPSUM_TEXT_DOMAIN ); ?></button>
        <button class="button button-primary postem-ipsum-delete"><?php _e( "Delete all posts generated with Postem Ipsum", POSTEM_IPSUM_TEXT_DOMAIN ); ?></button>
        <div class="result"></div>
    </div>
</div>