<?php

$api_org_token = "4beae040378425da0af251440dd2fc7967800c7921e35e7ac07403d9da92478fc9382c632be3b93991728f530dae33ff";
$params = $argv;
if (!isset($params[1])) {
    return 'Выбирите функцию';
}

$function_name = $params[1];

function get_all_satellites ($api_org_token) : ?array
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://que-api.dataclay.com/api/v1/satellites',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$api_org_token
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
    return null;
}

function create_new_job($token) : ?array
{
    $curl = curl_init();

    $timestamp = time();

    $post_data = [
        'projectId'     => '60c8216a668ef671b9901ed9',
        'output'        => "file_$timestamp",
        'layer-txt'     => 'Hello world!',
        'layer-img'     => "https://png.pngtree.com/element_our/20190528/ourmid/pngtree-small-url-icon-opened-on-the-computer-image_1132275.jpg"
    ];

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://que-api.dataclay.com/api/v1/jobs',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($post_data),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$token
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    var_dump($response);

    return null;
}


function update_job ($token) : ?array
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://que-api.dataclay.com/api/v1/jobs/60c9c365668ef671b9901ee3',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => '{
	"render-status": "done"
}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$token
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

    return null;
}

function jobs_in_campaign($token) : ?array
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://que-api.dataclay.com/api/v1/jobs/60c8216a668ef671b9901ed9',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
	"jobIdFilter" : false,
	"jobStatusFilter" :  false,
	"jobStatus" : 0,
	"jobPropertyFilter" : false,
	"jobProperty" : {},
	"dateFilter" : false,
	"jobSortingProperty" : "output",
	"jobSortDirection" : 0,
	"resultsPerPage" : 50,
	"page" : 1
}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$token
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
    return null;
}

function create_new_template($token):?array
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://que-api.dataclay.com/api/v1/templates',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
    "env": {
        "fonts": [
            "OfficinaSansStd-Bold"
        ],
        "effects": [
            "Drop Shadow",
            "Glow",
            "Templater Settings"
        ],
        "author": "arie@dataclay.com",
        "hostuser": "arie",
        "hostmachine": "Arie’s MacBook Pro",
        "filename": "postman-template.aep",
        "filepath": "/Volumes/GoogleDrive/Shared drives/Evangelism/Bare Essentials/postman-template.aep",
        "name": "postman-template.aep",
        "version": "1.0",
        "hostapp": {
            "name": "Adobe After Effects",
            "version": "16.1.1x4",
            "os": "Mac"
        },
        "added": 1565969752787,
        "modified": 1565969752787,
        "target": "{{FINAL_720P}}",
        "rigver": "2.9.4",
        "rigbuild": 9053
    },
    "rig": {
        "text": [
            {
                "layer": {
                    "name": "caption-2",
                    "index": 1,
                    "constructor": "TextLayer",
                    "type": "text",
                    "containing_comp": {
                        "name": "caption bottom",
                        "id": 84
                    },
                    "layout": {
                        "scale": 100,
                        "align": {
                            "center": false,
                            "edge": "top_left",
                            "padding": 0,
                            "anchor": 1
                        },
                        "attach": {
                            "target": null,
                            "side": "none",
                            "center": false,
                            "group": "none",
                            "padding": 10
                        }
                    },
                    "time": {
                        "comp_starts_inpoint": false,
                        "comp_ends_outpoint": false,
                        "shift": {
                            "target": null,
                            "inpoint_to": "none",
                            "outpoint_to": "none",
                            "overlap": 0
                        },
                        "trim": {
                            "preserve_start": false,
                            "preserve_end": false,
                            "in": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            },
                            "out": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            }
                        },
                        "stretch": {
                            "target": null,
                            "type": "none",
                            "overlap": 0
                        }
                    },
                    "font": "OfficinaSansStd-Bold"
                }
            },
            {
                "layer": {
                    "name": "caption-1",
                    "index": 1,
                    "constructor": "TextLayer",
                    "type": "text",
                    "containing_comp": {
                        "name": "caption top",
                        "id": 95
                    },
                    "layout": {
                        "scale": 95,
                        "align": {
                            "center": 1,
                            "edge": "left",
                            "padding": 0,
                            "anchor": false
                        },
                        "attach": {
                            "target": null,
                            "side": "none",
                            "center": false,
                            "group": "none",
                            "padding": 0
                        }
                    },
                    "time": {
                        "comp_starts_inpoint": false,
                        "comp_ends_outpoint": false,
                        "shift": {
                            "target": null,
                            "inpoint_to": "none",
                            "outpoint_to": "none",
                            "overlap": 0
                        },
                        "trim": {
                            "preserve_start": false,
                            "preserve_end": false,
                            "in": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            },
                            "out": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            }
                        },
                        "stretch": {
                            "target": null,
                            "type": "none",
                            "overlap": 0
                        }
                    },
                    "font": "OfficinaSansStd-Bold"
                }
            },
            {
                "layer": {
                    "name": "title",
                    "index": 2,
                    "constructor": "TextLayer",
                    "type": "text",
                    "containing_comp": {
                        "name": "title",
                        "id": 117
                    },
                    "layout": {
                        "scale": 95,
                        "align": {
                            "center": false,
                            "edge": "none",
                            "padding": 0,
                            "anchor": false
                        },
                        "attach": {
                            "target": null,
                            "side": "none",
                            "center": false,
                            "group": "none",
                            "padding": 10
                        }
                    },
                    "time": {
                        "comp_starts_inpoint": false,
                        "comp_ends_outpoint": false,
                        "shift": {
                            "target": null,
                            "inpoint_to": "none",
                            "outpoint_to": "none",
                            "overlap": 0
                        },
                        "trim": {
                            "preserve_start": false,
                            "preserve_end": false,
                            "in": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            },
                            "out": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            }
                        },
                        "stretch": {
                            "target": null,
                            "type": "none",
                            "overlap": 0
                        }
                    },
                    "font": "OfficinaSansStd-Bold"
                }
            }
        ],
        "footage": [
            {
                "layer": {
                    "name": "album-cover",
                    "index": 1,
                    "constructor": "AVLayer",
                    "type": "footage",
                    "containing_comp": {
                        "name": "album",
                        "id": 62
                    },
                    "layout": {
                        "scale": 100,
                        "align": {
                            "center": 1,
                            "edge": "none",
                            "padding": 0,
                            "anchor": false
                        },
                        "attach": {
                            "target": null,
                            "side": "none",
                            "center": false,
                            "group": "none",
                            "padding": 10
                        },
                        "fit": "letterbox"
                    },
                    "time": {
                        "comp_starts_inpoint": false,
                        "comp_ends_outpoint": false,
                        "shift": {
                            "target": null,
                            "inpoint_to": "none",
                            "outpoint_to": "none",
                            "overlap": 0
                        },
                        "trim": {
                            "preserve_start": false,
                            "preserve_end": false,
                            "in": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            },
                            "out": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            }
                        },
                        "stretch": {
                            "target": null,
                            "type": "none",
                            "overlap": 0
                        }
                    }
                }
            },
            {
                "layer": {
                    "name": "disc-face",
                    "index": 1,
                    "constructor": "AVLayer",
                    "type": "footage",
                    "containing_comp": {
                        "name": "disc",
                        "id": 73
                    },
                    "layout": {
                        "scale": 100,
                        "align": {
                            "center": 1,
                            "edge": "none",
                            "padding": 0,
                            "anchor": false
                        },
                        "attach": {
                            "target": null,
                            "side": "none",
                            "center": false,
                            "group": "none",
                            "padding": 10
                        },
                        "fit": "letterbox"
                    },
                    "time": {
                        "comp_starts_inpoint": false,
                        "comp_ends_outpoint": false,
                        "shift": {
                            "target": null,
                            "inpoint_to": "none",
                            "outpoint_to": "none",
                            "overlap": 0
                        },
                        "trim": {
                            "preserve_start": false,
                            "preserve_end": false,
                            "in": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            },
                            "out": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            }
                        },
                        "stretch": {
                            "target": null,
                            "type": "none",
                            "overlap": 0
                        }
                    }
                }
            }
        ],
        "solid": [
            {
                "layer": {
                    "name": "brightness",
                    "index": 9,
                    "constructor": "AVLayer",
                    "type": "solid",
                    "containing_comp": {
                        "name": "ANIMATION",
                        "id": 51
                    },
                    "layout": {
                        "scale": 0,
                        "align": {
                            "center": false,
                            "edge": "none",
                            "padding": 0,
                            "anchor": false
                        },
                        "attach": {
                            "target": null,
                            "side": "none",
                            "center": false,
                            "group": "none",
                            "padding": 10
                        }
                    },
                    "time": {
                        "comp_starts_inpoint": false,
                        "comp_ends_outpoint": false,
                        "shift": {
                            "target": null,
                            "inpoint_to": "none",
                            "outpoint_to": "none",
                            "overlap": 0
                        },
                        "trim": {
                            "preserve_start": false,
                            "preserve_end": false,
                            "in": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            },
                            "out": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            }
                        },
                        "stretch": {
                            "target": null,
                            "type": "none",
                            "overlap": 0
                        }
                    }
                }
            },
            {
                "layer": {
                    "name": "tint",
                    "index": 10,
                    "constructor": "AVLayer",
                    "type": "solid",
                    "containing_comp": {
                        "name": "ANIMATION",
                        "id": 51
                    },
                    "layout": {
                        "scale": 100,
                        "align": {
                            "center": false,
                            "edge": "none",
                            "padding": 0,
                            "anchor": false
                        },
                        "attach": {
                            "target": null,
                            "side": "none",
                            "center": false,
                            "group": "none",
                            "padding": 10
                        }
                    },
                    "time": {
                        "comp_starts_inpoint": false,
                        "comp_ends_outpoint": false,
                        "shift": {
                            "target": null,
                            "inpoint_to": "none",
                            "outpoint_to": "none",
                            "overlap": 0
                        },
                        "trim": {
                            "preserve_start": false,
                            "preserve_end": false,
                            "in": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            },
                            "out": {
                                "target": null,
                                "to": "none",
                                "overlap": 0
                            }
                        },
                        "stretch": {
                            "target": null,
                            "type": "none",
                            "overlap": 0
                        }
                    }
                }
            }
        ],
        "comp": [],
        "adj": [],
        "json": []
    },
    "panel": {
        "footage": "",
        "module": "",
        "settings": "",
        "start": null,
        "end": null,
        "output": "",
        "prefix": "",
        "version": null,
        "build": null
    }
}',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$token,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

    return null;
}

function get_all_temps($token):?array
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://que-api.dataclay.com/api/v1/templates',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$token
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
    return null;
}

call_user_func_array($function_name, [$api_org_token]);