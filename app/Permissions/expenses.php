<?php
use Tendoo\Core\Models\Permission;

if ( defined( 'NEXO_CREATE_PERMISSIONS' ) ) {
    $expenses                 =   new Permission;
    $expenses->name           =   __( 'Create Expenses' );
    $expenses->namespace      =   'nexopos.create.expenses';
    $expenses->description    =   __( 'Let the user create expenses' );
    $expenses->save();

    $expenses                 =   new Permission;
    $expenses->name           =   __( 'Delete Expenses' );
    $expenses->namespace      =   'nexopos.delete.expenses';
    $expenses->description    =   __( 'Let the user delete expenses' );
    $expenses->save();

    $expenses                 =   new Permission;
    $expenses->name           =   __( 'Update Expenses' );
    $expenses->namespace      =   'nexopos.update.expenses';
    $expenses->description    =   __( 'Let the user update expenses' );
    $expenses->save();

    $expenses                 =   new Permission;
    $expenses->name           =   __( 'Read Expenses' );
    $expenses->namespace      =   'nexopos.read.expenses';
    $expenses->description    =   __( 'Let the user read expenses' );
    $expenses->save();
}