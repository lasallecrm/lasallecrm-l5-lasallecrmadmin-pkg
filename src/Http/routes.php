<?php

/**
 *
 * Administration package for the LaSalle Customer Relationship Management package.
 *
 * Based on the Laravel 5 Framework.
 *
 * Copyright (C) 2015  The South LaSalle Trading Corporation
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @package    Administration package for the LaSalle Customer Relationship Management package
 * @link       http://LaSalleCRM.com
 * @copyright  (c) 2015, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */


Route::group(array('prefix' => 'admin'), function()
{
    Route::resource('crmaddresses', 'AdminCRMAddressesController');
    Route::post('crmaddresses/confirmDeletion/{id}', 'AdminCRMAddressesController@confirmDeletion');

    Route::resource('crmcompanies', 'AdminCRMCompaniesController');
    Route::post('crmcompanies/confirmDeletion/{id}', 'AdminCRMCompaniesController@confirmDeletion');

    Route::resource('crmemails', 'AdminCRMEmailsController');
    Route::post('crmemails/confirmDeletion/{id}', 'AdminCRMEmailsController@confirmDeletion');

    Route::resource('crmpeoples', 'AdminCRMPeoplesController');
    Route::post('crmpeoples/confirmDeletion/{id}', 'AdminCRMPeoplesController@confirmDeletion');

    Route::resource('crmsocials', 'AdminCRMSocialsController');
    Route::post('crmsocials/confirmDeletion/{id}', 'AdminCRMSocialsController@confirmDeletion');

    Route::resource('crmtelephones', 'AdminCRMTelephonesController');
    Route::post('crmtelephones/confirmDeletion/{id}', 'AdminCRMTelephonesController@confirmDeletion');

    Route::resource('crmwebsites', 'AdminCRMWebsitesController');
    Route::post('crmwebsites/confirmDeletion/{id}', 'AdminCRMWebsitesController@confirmDeletion');


    // Lookup Tables
    Route::resource('luaddresses', 'AdminLookupAddressTypesController');
    Route::post('luaddresses/confirmDeletion/{id}', 'AdminLookupAddressTypesController@confirmDeletion');

    Route::resource('luemails', 'AdminLookupEmailTypesController');
    Route::post('luemails/confirmDeletion/{id}', 'AdminLookupEmailTypesController@confirmDeletion');

    Route::resource('lusocials', 'AdminLookupSocialTypesController');
    Route::post('lusocials/confirmDeletion/{id}', 'AdminLookupSocialTypesController@confirmDeletion');

    Route::resource('lutelephones', 'AdminLookupTelephoneTypesController');
    Route::post('lutelephones/confirmDeletion/{id}', 'AdminLookupTelephoneTypesController@confirmDeletion');

    Route::resource('luwebsites', 'AdminLookupWebsiteTypesController');
    Route::post('luwebsites/confirmDeletion/{id}', 'AdminLookupWebsiteTypesController@confirmDeletion');

});

