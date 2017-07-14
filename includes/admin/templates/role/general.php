<div class="um-admin-metabox">
	<?php $role = $object['data'];

    UM()->admin_forms( array(
        'class'		=> 'um-role-general um-half-column',
        'prefix_id'	=> 'role',
        'fields' => array(
            array(
                'id'		    => '_um_can_edit_profile',
                'type'		    => 'checkbox',
                'name'		    => '_um_can_edit_profile',
                'label'    		=> __( 'Can edit their profile?', 'ultimatemember' ),
                'tooltip' 	=> __( 'Can this role edit his own profile?', 'ultimatemember' ),
                'value'		    => ! empty( $role['_um_can_edit_profile'] ) ? $role['_um_can_edit_profile'] : 0,
            ),
            array(
                'id'		    => '_um_can_delete_profile',
                'type'		    => 'checkbox',
                'name'		    => '_um_can_delete_profile',
                'label'    		=> __( 'Can delete their account?', 'ultimatemember' ),
                'tooltip' 	=> __( 'Allow this role to delete their account and end their membership on your site', 'ultimatemember' ),
                'value'		    => ! empty( $role['_um_can_delete_profile'] ) ? $role['_um_can_delete_profile'] : 0,
            )
        )
    ) )->render_form(); ?>
</div>