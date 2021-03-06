<?php
$module_name = 'legal_arrestees';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'CONTACT INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'JAIL INFO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'ARREST INFO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'CASE INFO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'SUPPORT INFO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'NOTES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'DEFAULT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
            'tabindex' => '1',
          ),
          1 => 
          array (
            'name' => 'date_of_birth',
            'label' => 'LBL_DATE_OF_BIRTH',
            'tabindex' => '4',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
            'tabindex' => '2',
          ),
          1 => 
          array (
            'name' => 'gender_id_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER_ID',
            'tabindex' => '5',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'preferred_name',
            'label' => 'LBL_PREFERRED_NAME',
            'tabindex' => '3',
          ),
          1 => 
          array (
            'name' => 'medical_concern_c',
            'label' => 'LBL_MEDICAL_CONCERN',
            'tabindex' => '6',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'confirmed_info_c',
            'label' => 'LBL_CONFIRMED_INFO',
            'tabindex' => '7',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'info_notes_c',
            'label' => 'LBL_INFO_NOTES',
            'tabindex' => '8',
          ),
          1 => 
          array (
            'name' => 'bad_phone_c',
            'label' => 'LBL_BAD_PHONE',
            'tabindex' => '10',
          ),
        ),
      ),
      'CONTACT INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
            'tabindex' => '10',
          ),
          1 => 
          array (
            'name' => 'primary_address_state',
            'comment' => 'State for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_STATE',
            'tabindex' => '15',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
            'tabindex' => '11',
          ),
          1 => 
          array (
            'name' => 'primary_address_postalcode',
            'comment' => 'Postal code for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
            'tabindex' => '16',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
            'tabindex' => '12',
          ),
          1 => 
          array (
            'name' => 'support_person_c',
            'label' => 'LBL_SUPPORT_PERSON',
            'tabindex' => '17',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
            'tabindex' => '13',
          ),
          1 => 
          array (
            'name' => 'support_contact_c',
            'label' => 'LBL_SUPPORT_CONTACT',
            'tabindex' => '18',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_city',
            'comment' => 'City for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_CITY',
            'tabindex' => '14',
          ),
          1 => 
          array (
            'name' => 'affinity_group_c',
            'label' => 'LBL_AFFINITY_GROUP',
            'tabindex' => '19',
          ),
        ),
      ),
      'JAIL INFO' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'jail_facility_c',
            'label' => 'LBL_JAIL_FACILITY',
            'tabindex' => '30',
          ),
          1 => 
          array (
            'name' => 'bail_c',
            'label' => 'LBL_BAIL',
            'tabindex' => '35',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'booking_number_c',
            'label' => 'LBL_BOOKING_NUMBER',
            'tabindex' => '31',
          ),
          1 => 
          array (
            'name' => 'release_date',
            'label' => 'LBL_RELEASE_DATE',
            'tabindex' => '36',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'jail_location_c',
            'label' => 'LBL_JAIL_LOCATION',
            'tabindex' => '32',
          ),
          1 => 
          array (
            'name' => 'release_time',
            'label' => 'LBL_RELEASE_TIME',
            'tabindex' => '37',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'release_type_c',
            'studio' => 'visible',
            'label' => 'LBL_RELEASE_TYPE',
            'tabindex' => '38',
          ),
        ),
      ),
      'ARREST INFO' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'arrest_date',
            'label' => 'LBL_ARREST_DATE',
            'tabindex' => '50',
          ),
          1 => 
          array (
            'name' => 'arresting_officer',
            'label' => 'LBL_ARRESTING_OFFICER',
            'tabindex' => '53',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'arrest_time_c',
            'label' => 'LBL_ARREST_TIME',
            'tabindex' => '51',
          ),
          1 => 
          array (
            'name' => 'badge_number',
            'label' => 'LBL_BADGE_NUMBER',
            'tabindex' => '53',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'arrest_location',
            'label' => 'LBL_ARREST_LOCATION',
            'tabindex' => '52',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'police_report_number_c',
            'label' => 'LBL_POLICE_REPORT_NUMBER',
            'tabindex' => '55',
          ),
          1 => 
          array (
            'name' => 'arrest_city_c',
            'studio' => 'visible',
            'label' => 'LBL_ARREST_CITY',
            'tabindex' => '56',
          ),
        ),
      ),
      'CASE INFO' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'caseid_c',
            'label' => 'LBL_CASEID',
          ),
          1 => 
          array (
            'name' => 'docket_c',
            'label' => 'LBL_DOCKET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'initial_charges_c',
            'studio' => 'visible',
            'label' => 'LBL_INITIAL_CHARGES',
          ),
          1 => 
          array (
            'name' => 'amended_charges_c',
            'studio' => 'visible',
            'label' => 'LBL_AMENDED_CHARGES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'case_number_c',
            'label' => 'LBL_CASE_NUMBER',
            'tabindex' => '61',
          ),
          1 => 
          array (
            'name' => 'felony_charges',
            'label' => 'LBL_FELONY_CHARGES',
            'tabindex' => '67',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'lawyer',
            'label' => 'LBL_LAWYER',
            'tabindex' => '62',
          ),
          1 => 
          array (
            'name' => 'minor',
            'label' => 'LBL_MINOR',
            'tabindex' => '68',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'first_appearance_date_c',
            'label' => 'LBL_FIRST_APPEARANCE_DATE',
            'tabindex' => '63',
          ),
          1 => 
          array (
            'name' => 'immigration_issues',
            'label' => 'LBL_IMMIGRATION_ISSUES',
            'tabindex' => '69',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'next_hearing_time_c',
            'label' => 'LBL_NEXT_HEARING_TIME',
            'tabindex' => '65',
          ),
          1 => 
          array (
            'name' => 'jurisdiction_c',
            'studio' => 'visible',
            'label' => 'LBL_JURISDICTION',
            'tabindex' => '70',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'first_appearance_location_c',
            'label' => 'LBL_FIRST_APPEARANCE_LOCATION',
          ),
          1 => 
          array (
            'name' => 'case_status_c',
            'studio' => 'visible',
            'label' => 'LBL_CASE_STATUS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'cant_attend_c',
            'label' => 'LBL_CANT_ATTEND',
          ),
          1 => 
          array (
            'name' => 'disposition_c',
            'studio' => 'visible',
            'label' => 'LBL_DISPOSITION',
            'tabindex' => '66',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'infraction_c',
            'label' => 'LBL_INFRACTION',
          ),
          1 => 
          array (
            'name' => 'stay_away_c',
            'label' => 'LBL_STAY_AWAY',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'wants_lawyer_c',
            'label' => 'LBL_WANTS_LAWYER',
          ),
        ),
      ),
      'SUPPORT INFO' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'legal_strategy_c',
            'studio' => 'visible',
            'label' => 'LBL_LEGAL_STRATEGY',
            'tabindex' => '70',
          ),
          1 => 
          array (
            'name' => 'medical_needs_c',
            'studio' => 'visible',
            'label' => 'LBL_MEDICAL_NEEDS',
            'tabindex' => '72',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACTS',
            'tabindex' => '71',
          ),
          1 => 
          array (
            'name' => 'property_issues_c',
            'studio' => 'visible',
            'label' => 'LBL_PROPERTY_ISSUES',
            'tabindex' => '73',
          ),
        ),
      ),
      'NOTES' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
            'tabindex' => '80',
          ),
          1 => 
          array (
            'name' => 'messages_c',
            'studio' => 'visible',
            'label' => 'LBL_MESSAGES',
          ),
        ),
      ),
    ),
  ),
);
?>
