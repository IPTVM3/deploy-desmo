<?php

namespace App\Http\Controllers\Dashboard;

use App\Geteway;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetewayController extends Controller
{
    public function index(){
        $store = Store::first();
        $geteways = $store->geteways;
        return view('dashboard.settings.geteway', compact(['store','geteways']));
    }

    public function paypal(){
        $store = Store::first();
        $geteways = $store->geteways;


       


        $paypal = array( 

        
         
            array(
                
                "PAYPAL MIMO",
                "Adgp471Afe81Sa8Ed4lH58osYyI1dRWTKeccGe28YoRb_sKI_ge_N0Sr4v3HBN_oOZsRe-4lhZAbEkwL"
            ),
            array(
                "PAYPAL AFS4-loschebenjamin242",
                "ARxJXKriozMdRPM6yGbcYQeJvNDojddm9yFvEZYnHHNrgmBinY1PjO7EhmSMoSuQXMuMG20NSLk8Bneg"
            ),
            array(
                "PAYPAL AFS4-wilsonlee1973",
                "AfksiIjKgl_igwXqq_Dgl3vqADjGMc8aqRuPR-qLHqjUg1Wkzwm2h1nOJO1rhXxRM6MyxF9kH0WKnMKl"
            ),
            array(
                "PAYPAL AFS4-danialliuno1977",
                "AUldKZu4mHrfABsZg1OUhd4fK5yY6dc_PkbYbQtzuK1hRZ_YkVqhXX3U0Sed1A0-hnEUtJfW_jNvg8mz"
            ),
            array(
                "PAYPAL AFS4-vandenbergan",
                "AZuSVmD4iGwYVT0euJrAChg1zkUf7YsvJeDQilLhBA3OWvFxu7RfD9Qke83mPUu0fRhAGdfSMBhdDP7n"
            ),
            array(
                "PAYPAL MAR-elmazadi22anour",
                "AWcu5_BMx4DX4H2NgwcqruTvxDHRzOx8nPu-zs7soh8x7cGbCvrkSh6q-JQTshBJ0q9MCbtlFkEeDsc8"
            ),
            array(
                "PAYPAL MAR-medbaha2121",
                "AYW10kP1zIfSxEvdN0EeYV2vhmTX4BWvL57wWkXfTQXkm1lHgHRENgMMpFpk5HdUQqOY19Ey45qWtfEG"
            ),
            
            array(
                "PAYPAL MAR-zboklbok01",
                "AccF8iqMqP7qXSyd6wg3lsKM2ToIDFgifqkak2OI6tIc8flPs8u_ybwC-TPToeZ_wUi4nmTzY0Ih4Zlg"
            ),
            array(
                "PAYPAL AFS4-rsebelljefferey",
                "ATxlaP73U7VQSkbGTVB0KxodwuHtfB8EIKDsvIBIp1loUcDHeOYb_OFQuJjw6bujJ0GDLBdUu8hJ15NT"
            ),
            array(
                "PAYPAL AFS4-rustamoveldar",
                "AcELGNUhlTwRzDn_y-zDw0BKrpDcTolb1dz_ZAX-BI5BDMkKpSqy08S6Bbq6PvC0Nq4x-gqIqjPhACxk"
            ),
            array(
                "PAYPAL M4-marouaneguerrach0",
                "AXKBl6IeKSRFRpA_8U2s7UAuMISeCIYoxDz4fMq3EbX0CfxItc1kBqpHsXy_IEb0sp7Tt0m1CoFVPPWi"
            ),
            array(
                "PAYPAL CA4-my.buslove23",
                " AcTT4D-4tqBmewm4clrOkDmp18PTpl9l7sL1kmMPV9t9_SchgvYA0wk4yQgfTlwjevqLCuOzPSe75uhm"
            ),
            array(
                "PAYPAL AF4-petrovdimitar65",
                "Ac4vHSazCVy_i9bwLFt0pdMUmwkOG5y_TLnWIara6wFBZNmyiNH3VqD1I4UZcBZ_JaMwchfWO9XmXHTj"
            ),
            array(
                "PAYPAL AF4-asenovaleksanar11",
                "AYBSj_EQdZJ5m4YOl1Ss04qAQbv43Q_RID-Ffu1EscLeCQw-lqkGLFgtPkahzd6cork1KNoRwDEjI1X0"
            ),
            array(
                "PAYPAL AF4-Rustenburg8",
                "ARDmNE0j1qJelSO1-5t_p5LE7eST_iwJoa52GerfTyX78gCHUOvAk59FcHTtvqqVmKcbhWQCmH2JBcZM"
            ),
            array(
                "PAYPAL IS4-LUKSICIVAN22",
                "AZvEbA7oyIEEuQDgMogWMxCfFEqYkjzoElNIjdiBJ7tmNWibM_f7casnibVzn_Deuht-Ln2CXlMlrHIf"
            ),
            array(
                "PAYPAL  ",
                "AVtspBiCXebkVXN-mLei2oQVilaUFMxmU-NjbHOu1Gc6FMBix-PQd72YAjAATbw5rUMLbvhotmdQne8l"
            ),
            array(
                "PAYPAL AF4'-alexmorgarn22",
                "AZM7slo0aw9cQm_00nmem2hrVbYSfqzgVHE5Gb05g4YZP1dWydUFiAuJCUNdFDVlvlmrc1rrY3fEs1US"
            ),
            array(
                "PAYPAL AF4'-soumanmouha",
                "AQj0mrtlF0A1PkL5Lq_1FRSheKKV1XAti5ddhRRTL_Vm7iFvtuC4fkFPWNlFEPtLmDUaCTsbbLrd70q8"
            ),
            array(
            "PAYPAL US4'-jemesherman33",
            "AdyB-Uf6ch5U8k_T7ts_lFnNBTuKPGKMiOnQg3pjftZdjOi1gLQcVDFP8fSspo4UaNkSXYSprDlqhf7i"
        ),
        array(
            "PAYPAL US4'-juliegonzalez08",
            "AZ2fIwojPft071Vj58LHLUE77LFudHgKt0ay9Z16pxJ5K_peM0SPMZW264ouh4ye-JS0fw2LJkEV5Q-f"
        ),
        array(
            "PAYPAL US4-luchanskaaglika57",
            "AX5X_aaVLHJy8GUDRLpgM_QINDbh_ZDzUhepRwlVwyWnCsXAfnzO2X25E5A_YmyEICZAjwxjsjKDmR0d"
        ),
        array(
            "PAYPAL US4-naydenova13",
            "AeCPjE3EH2JRsIFKafa2fCHzpiDvtgK4abA_5QaFZPXWakGE1JCP6WE5XFFcnlMRWhMKPBdck_D_IsuY"
        ),
        array(
            "PAYPAL US4-stoichkovdimitar34",
            "AdkL3tJgwD9yc6bdIpOOCnr4CCfsOoK7_feNmggJ5w2YSvsxANmHN8dMgBvb6MUCwVxDSTek4lXgyts9"
        ),
        array(
            "PAYPAL SW4-SHEEHANPAULMICHAEL34",
            "AUpVu-u6aev7TzLiVRvHyp4kFQw-pIVvtyxS0542aleNPhmcUGc5jJaw0FdLzYSrOD5zifC8VakO8Nol"
        ),
        array(
            "PAYPAL SA4-endykaliiop",
            "AYct4PBi4hTbATjsMD4x1B4nmtCvFs2oeRtAes4O3rZ7YgCAuTlBpCANSwSZMetAuN4824civpfBHNo6"
        ),
        array(
            "PAYPAL SA4-adedeasaue",
            "AZtmWm4hBP41Snmh6osaNT2o5puj6a72XnY0nzi4GtMl4ru8d9PezL3Z1ZNnOIpdY7sNJE_yYJe6gOUC"
        ),
        array(
            "PAYPAL ARG4D-jonathan.reusela",
            "AWT4ke9OZGutwUfjn--gGSskRVuIQXC07U7TITm_twscExlJpiR_Dp0EKbLPEK8BGL_qQaiJnBMqWuwB"
        ),
        array(
            "PAYPAL SW4-ngcheunsee63r5",
            "ATyRft5uJqPkILsR5T_TjwTyKkS6UyIgCWDgFhQiZhOjQeWd8Uo1B4hbskc3vlss9rV0rmEDfNjX8mHY"
        ),
        array(
            "PAYPAL SA4-louzatariik",
            "AcnZ_On6MJGPP2nhyFriYV2J95WCjZYtaY157AGUsrlQ7O-1mWDYel-dB25Xew2TgEowivtoNazWqhZ7"
        ),
        array(
            "PAYPAL SW4-richfield3r45",
            "AWs-i36d7I9pXX9oIPvAn7VdNVe6l34RNFbkIZQJ9y26MzzH1YDa9BYbFKCU1PdwlBXCkzKL4nxS4EKA"
        ),
        array(
            "PAYPAL SW4-nuguidjaeallen6r5",
            "AfPlAt5AvbTzOxxmTqrK-i5KGLDbc9k3Kf12GJJ3NzWwj8aAHQHCZEfzjnSkqjIhZpk26yIHDbdwggEG"
        ),
        array(
            "PAYPAL uK4-mohammedoubadi21",
            "AbF8sU0WvKcV7Yz3nDSZLINS9_kcBjleuk7JGN-i7qy2CcltFVinilz4SximhcyQra0ilsToF3Y1uZj1"
        ), 
        array(
            "PAYPAL PH4D-Vasiliollilis105",
            " Ab7OMiAOrFvMINlXUyo20hO75KlpA0eLF92kBuGtZxoWtP0IiksQA4GgfyiuqqoqNfVpzBbzrBdp8RKO"
        ),
        array(
            "PAYPAL 4D-greyson.brock820",
            " AVbCYC4EFtoI9z_KOqswa55bU3C9LW6mrzJHkC8IIjhEH7erksgduhcWjgE4L-1NdcddrXsqyd1X4SDs"
        ),
        array(
            "PAYPAL F4D-Nicolas.george90",
            "ATUmoC-rwrlR6yXLeW8rJh2wX-T-tAE3lPUll-L2zoQl3GLT9tlqKs-rh-Jl2TIXs6fqqoxINSBXIu4g"
        ),
        array(
            "PAYPAL CD4-Jacop.peoples3021",
            "Ac36s950TzBZGd_shIwQAlSCF7QI9jK667PLvpN2H4XotclNlcmtWrOlm0M7Q3ce8M_JITdSPRVokJg4"
        ),
        array(
            "PAYPAL CD4-Sergio.howell5319",
            "AYYpketcy82Byy0xFF9e4p1n9-JmhCALGaTU3O2Z0tDCKErG0Wzm577bvP70sttgfnSp_N9rr-Wohmg8"
        ),
        array(
            "PAYPAL AF4-jacquelinebooker22",
            "ARRPo4aTqd5-PR_4EMU4kek1WIiIWsfjZQSYHdy5Y7nRvJQizH_pFwAcdZ-vmO1j0qtnE5gYf6PU04QF"
        ),
        array(
            "PAYPAL SPD-Idriouich.abdessamad89",
            "AYPmDbCYoYJ2lY9FWDnKE3GE-oUvJ-TNq3RSzfWeBWAStMEHgtgDgDKwHqRAU2mA5SgWGtW5m6ZM44F2"
        ),
        array(
            "PAYPAL MONd-YASSLIM0DOERE",
            "Acx0zFu_FSm-SuTFgOK870kzBJDcQgEp2U7GI9Vo8mEx9NEI9vpL1DLgFaIb1kvNf6E2MsQRGTgXjWQ6"
        ),
        array(
            "PAYPAL UKD-Ilocavgorgioe23",
            "Aa5g3617J-rxcoOpHC-2fvxVdIK8koUQLc0GoqIBjquunmE3hTC1lh3YAArnBk8ZtnTI4aIq8ZCxmGg4"
        ),
        array(
            "PAYPAL UKD-dallasperez",
            "AfFRl3dr2kNz5ryVqeNQcaI39PpLvJJQ13h7hDPe5_0HSmhn8S6qTJb7REgyHl1zo892wktK59-Led3h"
        ),
        array(
            "PAYPAL SFD-TREMBATH.JOSH",
            "GsDd4LybldikXvxfkIm8jhxsjcei9gmS7Da279tcPOoFH3DGji5mAvqe5IjQeU6VViMSp"
        ),
        array(
            "PAYPAL SFD-Raul.Olgera",
            "AfFMtY9GYEL9jAfMFiDld5pNkStgKMjpA2J4dSxvzsIywsA4CDRNIMSzU73E5OgKOXA3aLXioWIHuvXg"
        ),
        array(
            "PAYPAL ISD-gamila.zatkivb",
            "AZl4lojrBNk9_DRCVKfhAWvjoUjNL0gYiR2Nd3sWK7Wqi3-zKfOc25tC2eODTsmlotJWa9SyEjp0XRu3"
        ),
        array(
            "PAYPAL ISD-lwartdoauw17",
            "ASceK2KBxYFrwKcDSfSuVlOoYM-4f13hicLjeweijoc1DUn6vUESZQKcV6S1nzurTmiV_0Rvxu4DtuaQ"
        ),
        array(
            "PAYPAL ISD-LOPER9VRESFE",
            "AUPpkrPpB1hk3emzMpGphH4UUPUuceorqjNlZ5dPZ5_s-duvpjGvY5TJdo2oPMcq3sV8ciVM2m35mWJd"
        ),
        array(
            "PAYPAL ISD-DOLIKER5BIRESSA",
            "AchhcG6JVTFhIHTTc-6b9fak542O-r_xhv5UFK_ybkV7nsyd92yqRHumaBZUVHlOMskM2zQwKf6EPLCN"
        ),
        array(
            "PAYPAL ISD-GORGIE5BRISREA",
            "AchW_AAH_rWWg79FykUqY_4N0zXnSnTb1DErvTYIWZzZO2Yq6iwWx17z2Cp7Vbr6MnCo9yB87QmR_WoD"
        ),
        array(
            "PAYPAL ISD-GORGIE5BRISREA",
            "AchW_AAH_rWWg79FykUqY_4N0zXnSnTb1DErvTYIWZzZO2Yq6iwWx17z2Cp7Vbr6MnCo9yB87QmR_WoD"
        ),
        array(
            "PAYPAL SHD-saundersmitchell22",
            "Aare3m8oj1z7HHqTBDf2dkBDPIG1vGwYLd3s-ROG5ohBbPZcoOl3BD6FMPcMY6C3XBCFQ_vxdt5mv00h"
        ),
        array(
            "PAYPAL MRD-optionservice.nett",
            "ATl4Hb2oWIB7-wjinHRyIGc39l9V2azydubbt_YnnDMh8BD6JTuAoP7DSAu0V5lJCWDigrShd9ThRrqA"
        ),
        array(
            "PAYPAL MRD-optionbusiness2",
            "AdSqdz6jPJYwv4DvPKVFCdwySnkhtDwmuAzKRlLO2QIYoCJzL-bKM49IUTDkm_HuuCdy2H9BPybZIsW9"
        ),
        array(
            "PAYPAL SFD-sabbahanthony4y",
            "AUuvIza2A24z4JzCIAj3iBCU0xaOFFydsdGkSxGfDrUACSRo3qqG-HXKPXQZVAEx5Dg6nia3aVHh4haS"
        ),
        array(
            "PAYPAL SFD-shindongyoung501",
            "AdSu-eMWnUDJWwP7YLVELNSZAatVEOIbfg27wfEGubtpQ9_mCr5hqv3gvO_gbPfP3eLsGnmOQjeyKdDq"
        ),
        array(
            "PAYPAL SFD-BATHILYSECKOU4",
            "Af4LZkF1N761gWrwEGzy4HWi7Hizp2aHEXXehuZILsEb6iS10UV8XXg-zesK0WtfOaD4QbcjEldoHOXb"
        ),
        array(
            "PAYPAL ISD-meulmanmarkies",
            "AQUViKdU5yPkMrkQecpH1f5b8rxfVIvFAUmwJvhWMqeXK6CLONIYRlzzEAloOeVkQdOGkvUR0FFoigCW"
        ),
        array(
            "PAYPAL SDA-thomasjanmalkush34",
            "Ad8-RoQtaKBkI2OiF9BKLSnrux-ZZQtDuk39_JxSduTkbFtAQUOZ4LIl_K1GCgZwidfIEf5CJaE9PAtd"
        ),
        array(
            "PAYPAL SDA-ramosremie2",
            "AcKhXBhavJoV3zEpVTGW9LtMXjAi6onnWwN3CIVdBtWjaJmlrDJT-Ak29uG0JdcRQPdMpZ-V5s9qsqeJ"
        ),
        array(
            "PAYPAL SDA-darezolbonfrancisa22",
            "AXf_DHk0QfBIsdvKsb59fRg5R__yc584iDlKMrjZc-_Y8_egL5OvnESAtyrVy1I1YvdeNBgfb9E_HWP1"
        ),
        array(
            "PAYPAL SDAf-PRITCHARDJAMESSIMON22",
            "AW-RYcFf7va2Xd0cBKaePWhlOz7r7omWP61fA0hRsEC4pkmwS3f1v_lEnQQ5xq6yjlu8LAKzwzjhjbcR"
        ),
        array(
            "PAYPAL SDAF-TREMBATH.JOSHUAPAUL77",
            "ARTFVH926e-GsDd4LybldikXvxfkIm8jhxsjcei9gmS7Da279tcPOoFH3DGji5mAvqe5IjQeU6VViMSp"
        ),
        array(
            "PAYPAL SDAF-ALLEMANETHIBAUTSD",
            "AfD51MktaQ_myZs7JhRm1P15_7qwRWEfxiZxU6XrNswxq87xszsAUGGiYhBe3GBm-Y08SjrXGmPQYMi-"
        ),
        array(
            "PAYPAL SDAF-charlesnicolaspaul",
            "ARGqx0BX_0y6DkdCCDu1Vr1802-qO9reTAaoy1nhHilCPzdBdBa4x_ahb3ZR9DTmiaI1kJfg1YiSUJXX"
        ),
        array(
            "PAYPAL SDAF-tom.yngve.johansen",
            "AbqnLdsNvR3BHb7z333KEBUTb_IBnyRrxlD4TdvECk1O0n9qBRSo4MqzGA7CvQPrH_XJ5k6FaQw315a1"
        ),
        array(
            "PAYPAL SDF-thierrygavson",
            "ARuMV602dhJ_PKsej2CFQCD5UkAcW7U9yzgsegh1MLRj8fD6_02cQotABNSc5imwiim7_NnkCEUOt_PP"
        ),
        array(
            "PAYPAL SDF-camille.foo.sim.tzu.sarn9",
            "AURqO0EkjUaqD4YDY3ySHFZssn6JnYevwdrkLToVIlnt3XSuTSt_VHYv_PF0arvEYBbZWKwn6U8IbdUB"
        ),
        array(
            "PAYPAL SDF-ean.mark.B122",
            "AdaifjI_nCsO6hvbNtZ6zopY-eWBUEcqFLJjWyYC3mHpjWKz4wYSfEBY8kQqjflr04M18iHRk9UdxTBX"
        ),
        array(
            "PAYPAL SDF-agung.saepudin",
            "Afo66stc4WyHuSpsuX3SFsxntHPkfefnh9gArLBQpaHBxwfe0kHiG4JMy5tUJt-YSH1NMiMXFoLao89J"
        ),
        array(
            "PAYPAL ISR-AZOUANI74LNES",
            "AQuqvIQp7AjRUX0qvOdxQZIJH7N7rjepZdNV31fglO1ehd1Uakm_PU2xlLD8QxB7COXPVoGJRxKXIiGz"
        ),
        array(
            "PAYPAL ISR-VERIKAS8ANTANAS",
            "AZgQtyXaGvZIcs8nHyYAFdJmKyqNh_HSTwNHi26quBr0Mvy2zZtkTMYMzci56-vcEMBajL9punEbEaFw"
        ),
        array(
            "PAYPAL SDF-pavel.stepanik22",
            "AbIfQ2YIvRzginqap6yuXt02eYneXz2JQdhZEZGmLFN5EQCpBh1PohPN-4077_-6Wbuux8mqBJoZJIg8"
        ),
        array(
            "PAYPAL SDF-andrew.d.bradley",
            "AcbPW67PZx6rEgnwJMrd_mhkPc20sxNKgWucQo13xbNH9-mwdc8ZFZ0Oyy7HvyENhp2RjcVS9H3FGqee"
        ),
        array(
            "PAYPAL MRC-DOLIKER0IRSSAN" ,
            "ARtZFg0zTip6Ku5gZ1i2IaY1-BTLhnS3T3HSPwuXpRRoLD4o1hDzWEMr52OnB17hbFc6XW_iIzCdla65"
        ),
        array(
            "PAYPAL MRC-elhyadifatima91" ,
            "AaBO5RHUnnUwSgI8qiIHZeQSoPpBQYIBk7YURAuEvCPqxbwPBhkv6R_sryqhbOlkTx2uvhuKHdrgocs7"
        ),
        array(
            "PAYPAL UK-clarence.jacobb22" ,
            "AXP4sDTyBF8oM6YQpSzeCNzVC_1bKVYClUEQkviO11azrS36AaQYEqmiu9ydBSd1xe_oJ0yQ1iFTjrI7"
        ),
        array(
            "PAYPAL SAF-dean.andrew.porter" ,
            "Ad9b4Nwx1qpbxZCjgMF6Ca-JCiv-PR8QVdPOdr7jxK8JtJj0Wz8Gf-OqFHuNHE6Wry9ffokwJsU4n_ud"
        ),
        array(
            "PAYPAL MAR-infodarnal24" ,
            "ASmbypUCKhw3T--aW9CN-RqXJlXLHFPDyo61mCQvfVSOTinHpqgBhudMHH9m0i4ADFY824FEPjQwPV8h"
        ),
        array(
            "PAYPAL MAR-mazdakom24",
            "Acrhe6itRq4Z2V5zBiXcjUxxrnJzHuzbIsk5w7kqpyf6mWFHLAz4KWr3Yk18NzHWScx2sLk3MI8Ts070"
        ),
        array(
            "PAYPAL SAF-kangsukwon3" ,
            "AbWv2PpRw99Sg7SI6fxGM7WQ7AScWAt4_m3b2MUF8ma6lyELLKR8q33ya8bVpvbJqb2SinJf30nX8Etm"
        ),
        array(
            "PAYPAL NZI-ettinger.urs3000" ,
            "AWp244fkZVIE6huBAAiaN1NZQmPgByFTbNcR4AVYhX8LkH12NyEQ2ZRtADoMoKHMkj_6znfvVjNlJque"
        ),
        array(
            "PAYPAL MAR-mostafaablefakh" ,
            "AcWDnEEPnHXqw2kyZaoGgfX8EuTt4b-vvwK0ujocoZUut6R-sd-SeISaMSTfDCJrkO_8ij1TIcGJ3C0q"
        ),
        array(
            "PAYPAL MAR-tarikbekraoui" ,
            "AVch--Gec7iYNIrw_NQBdbLXa_Ky_Mj0TL70j2ywjSyRgvvlm2-FFeFbVogsM2WepznMQ_o1TF5e6AC2"
        ),
        array(
            "PAYPAL SAF-jorge.vera.frasquet.00" ,
            "AU_j3SMVq9O1xaLQ5hKaHmLrTa_sv39F5w-xIQqfVvihLZYsVEwspHvChSQG0Kd41hc2HCPwr2TLXxIT"
        ),
        array(
            "PAYPAL MAR-alaoui.steph" ,
            "AXw0E-zm54DFM94l70rbGZpgxccwwD9rKU9D-AUEKwEd-JPjHV2FyTV70AR0EHvrDm0eKQCw1OEjDZ0t"
        ),
        array(
            "PAYPAL MAR-aitcadiabdeljalil" ,
            "AXoQWo3hxIHNreufhAGtRdqlzMS6zZGEy9IirRcUreV-iDA8X_sYL39husKaxakyYuXfx-KNiQ_qOCQt"
        ),
         

        ); 
  
           
        return view('dashboard.settings.paypal', compact(['store','geteways','paypal']));
    }

    public function paypal_change(Request $request){
        $store = Store::first();
 
        if($request->operation_delete == 'operation_delete') {
                $mygetGeteway = Geteway::find($request->client_id);
                $lastgetway = Geteway::all()->last();
                $mygetGeteway->delete();
                if($lastgetway->id != $mygetGeteway->id){ 
                    $lastgetway->id = $request->client_id;
                    $lastgetway->update();
                }
                $store->unit_system = 1;
            $store->update();
            session()->flash('noty_color', 'success');
            session()->flash('noty_message', __('site.deleted_success'));
        }

        if($request->operation_create == 'operation_create') {
            $id = Geteway::all()->last()->id + 10;
            $getos = Geteway::create();
            $getos->client_account = $request->name;
            $getos->api_key = $request->api_key;
            $getos->mode = "https://www.re-cod.com";
            $getos->id = $id;
            $getos->is_active = 1;
            $getos->store_id = 1;
            $store->unit_system = 1;
            $store->update();
            $getos->update();
            session()->flash('noty_color', 'success');
            session()->flash('noty_message', __('site.added_success'));
        }
        return redirect()->route('settings.paypal');
    }
    

    
}
