<?php
    /**
     * 
     * Enqueuescripts
     * 
     */
    require get_template_directory() . '/inc/enqueuescripts.php';

    function fetch_api_data() {
        $response = wp_remote_get('https://jsonplaceholder.typicode.com/posts');
    
        if (is_wp_error($response)) {
            return 'Error fetching data from the API';
        }
    
        $posts = json_decode(wp_remote_retrieve_body($response), true);
    
        if (empty($posts)) {
            return 'No data found';
        }
    
        $output = '<table>';
        $output .= '<thead><tr><th>ID</th><th>Title</th><th>Body</th></tr></thead>';
        $output .= '<tbody>';
    
        foreach ($posts as $post) {
            $output .= '<tr>';
            $output .= '<td>' . esc_html($post['id']) . '</td>';
            $output .= '<td>' . esc_html($post['title']) . '</td>';
            $output .= '<td>' . esc_html($post['body']) . '</td>';
            $output .= '</tr>';
        }
    
        $output .= '</tbody></table>';
    
        return $output;
    }
    
    function register_api_table_shortcode() {
        add_shortcode('api_table', 'fetch_api_data');
    }
    
    add_action('init', 'register_api_table_shortcode');
    