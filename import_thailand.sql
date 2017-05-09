select
  sum(si.vit_wgt_net) as NET_WEI,
  sum(si.vit_wgt_grs) as GRO_WEI,
  sum(si.vit_stv) as CIF_KH,
  avg(sgs.VGS_INV_CUR_RAT) as EXC_RAT,
  sum(si.vit_stv)/avg(sgs.VGS_INV_CUR_RAT) as CIF_USD
  from sad_item si
  left join sad_general_segment sgs ON si.instanceid = sgs.instanceid
  where sgs.ide_rcp_nbr is not null
  and sgs.ide_typ_sad = 'IM'
  and sgs.gen_cty_ept_cod in ('TH')
  and sgs.ide_reg_dat between '01-JAN-15' AND '31-DEC-15';

select
  sum(si.vit_wgt_net) as NET_WEI,
  sum(si.vit_wgt_grs) as GRO_WEI,
  sum(si.vit_stv) as CIF_KH,
  avg(sgs.VGS_INV_CUR_RAT) as EXC_RAT,
  sum(si.vit_stv)/avg(sgs.VGS_INV_CUR_RAT) as CIF_USD
  from sad_item si
  left join sad_general_segment sgs ON si.instanceid = sgs.instanceid
  where sgs.ide_rcp_nbr is not null
  and sgs.ide_typ_sad = 'EX'
  and sgs.gen_cty_des_cod in ('TH')
  and sgs.ide_reg_dat between '01-JAN-15' AND '31-DEC-15';


select
  substr(si.tar_hsc_nb1,0,2) as HS_CHP,
  sum(si.vit_wgt_net) as NET_WEI,
  sum(si.vit_wgt_grs) as GRO_WEI,
  sum(si.vit_stv) as CIF_KH,
  avg(sgs.VGS_INV_CUR_RAT) as EXC_RAT,
  sum(si.vit_stv)/avg(sgs.VGS_INV_CUR_RAT) as CIF_USD
  from sad_item si
  left join sad_general_segment sgs ON si.instanceid = sgs.instanceid
  where sgs.ide_rcp_nbr is not null
  and sgs.ide_typ_sad = 'IM'
  and sgs.gen_cty_ept_cod in ('TH')
  and sgs.ide_reg_dat between '01-JAN-15' AND '31-DEC-15'
  group by substr(si.tar_hsc_nb1,0,2) 
  order by CIF_USD desc;


select
  substr(si.tar_hsc_nb1,0,2) as HS_CHP,
  sum(si.vit_wgt_net) as NET_WEI,
  sum(si.vit_wgt_grs) as GRO_WEI,
  sum(si.vit_stv) as CIF_KH,
  avg(sgs.VGS_INV_CUR_RAT) as EXC_RAT,
  sum(si.vit_stv)/avg(sgs.VGS_INV_CUR_RAT) as CIF_USD
  from sad_item si
  left join sad_general_segment sgs ON si.instanceid = sgs.instanceid
  where sgs.ide_rcp_nbr is not null
  and sgs.ide_typ_sad = 'EX'
  and sgs.gen_cty_des_cod in ('TH')
  and sgs.ide_reg_dat between '01-JAN-15' AND '31-DEC-15'
  group by substr(si.tar_hsc_nb1,0,2) 
  order by CIF_USD desc;