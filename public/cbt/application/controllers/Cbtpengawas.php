<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtpengawas extends CI_Controller { public function __construct() { goto Frb2G; hdhu4: redirect("\141\165\x74\x68"); goto lAzCo; u3DB4: rLook: goto mApQP; Nc1Bi: $this->load->model("\104\x61\x73\x68\142\x6f\x61\162\x64\x5f\x6d\x6f\x64\145\x6c", "\x64\x61\163\x68\x62\x6f\x61\162\x64"); goto vsato; I4OLM: if ($this->ion_auth->is_admin()) { goto rLook; } goto K2sd4; mApQP: goto l3Vp7; goto csPZv; gfuCS: $this->form_validation->set_error_delimiters('', ''); goto fcn0l; TRXuH: if (!$this->ion_auth->logged_in()) { goto KAVm_; } goto I4OLM; vsato: $this->load->model("\103\142\164\137\155\157\x64\145\154", "\x63\142\x74"); goto PHpcn; PHpcn: $this->load->model("\104\162\157\x70\144\157\167\x6e\x5f\x6d\x6f\144\145\154", "\144\162\x6f\x70\x64\x6f\167\156"); goto gfuCS; lAzCo: l3Vp7: goto KJ6oH; Frb2G: parent::__construct(); goto TRXuH; K2sd4: show_error("\110\141\x6e\x79\x61\x20\101\144\155\x69\x6e\x69\163\164\x72\141\164\157\x72\40\x79\x61\x6e\147\40\144\x69\142\145\162\x69\40\150\141\x6b\x20\x75\156\164\x75\x6b\40\x6d\x65\156\x67\x61\153\163\x65\163\40\x68\x61\x6c\x61\155\x61\x6e\40\x69\156\x69\54\40\x3c\141\x20\150\162\x65\146\75\42" . base_url("\x64\x61\163\x68\142\x6f\x61\162\x64") . "\x22\x3e\113\x65\155\142\141\154\x69\x20\x6b\145\40\155\145\156\165\x20\x61\x77\141\x6c\x3c\x2f\141\x3e", 403, "\x41\x6b\163\x65\x73\x20\x54\145\x72\x6c\141\162\141\156\147"); goto u3DB4; KJ6oH: $this->load->library(["\x64\141\164\x61\164\x61\x62\x6c\145\x73", "\146\x6f\162\155\137\x76\x61\x6c\151\144\141\x74\x69\x6f\156"]); goto Rx_ZT; Rx_ZT: $this->load->model("\115\141\x73\164\145\162\x5f\155\x6f\x64\145\154", "\155\141\163\x74\x65\162"); goto Nc1Bi; csPZv: KAVm_: goto hdhu4; fcn0l: } public function output_json($data, $encode = true) { goto ppFz4; mdxM8: K0Xzv: goto VMb93; ppFz4: if (!$encode) { goto K0Xzv; } goto UrBQO; UrBQO: $data = json_encode($data); goto mdxM8; VMb93: $this->output->set_content_type("\x61\x70\160\x6c\151\143\141\x74\151\x6f\x6e\x2f\152\163\157\156")->set_output($data); goto r2zvq; r2zvq: } public function index() { goto jE12D; jE12D: $user = $this->ion_auth->user()->row(); goto jbb4J; VlVA1: if (count($ids) > 0) { goto QHpx4; } goto Q02Rj; ZG4i9: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto pvHrO; K3i9a: $tglJadwals = []; goto an_4G; wz9ne: $data["\164\160\137\141\x63\x74\151\x76\145"] = $tp; goto ZG4i9; rGgE5: $this->load->view("\x5f\x74\145\x6d\160\x6c\141\x74\x65\x73\x2f\144\x61\163\x68\x62\157\141\162\144\x2f\x5f\x68\x65\x61\x64\x65\x72", $data); goto L2MVz; rIJur: QHpx4: goto jzXj2; t62X9: $jenis_selected = $this->input->get("\152\145\156\151\x73", true); goto l0wxf; cQuZU: $tp = $this->dashboard->getTahunActive(); goto pLsgc; AVJVT: W0F_J: goto T9lGk; Q02Rj: $data["\x6a\x65\156\151\x73"] = ['' => "\x62\x65\154\x75\155\x20\141\x64\141\40\x6a\x61\144\x77\141\154\x20\165\x6a\151\141\156"]; goto c1WkK; an_4G: if (!($jenis_selected != null)) { goto bRIEv; } goto sE4ZT; L2MVz: $this->load->view("\x63\x62\x74\57\160\145\156\x67\141\167\141\163\57\144\141\164\x61"); goto z1bi3; eXs3K: OJc5v: goto w_p2c; pLsgc: $smt = $this->dashboard->getSemesterActive(); goto VBl2f; JQEvx: $data = ["\165\x73\x65\162" => $user, "\152\x75\144\x75\x6c" => "\x41\164\165\162\x20\x50\145\x6e\x67\x61\167\x61\x73", "\163\165\x62\152\x75\x64\x75\x6c" => "\x50\x65\x6e\147\141\167\141\x73\40\125\x6a\151\x61\156\x2f\125\x6c\141\x6e\147\141\x6e", "\163\x65\164\x74\151\156\x67" => $setting]; goto cQuZU; fg54X: $ids = []; goto ZDLWo; pvHrO: $data["\x73\x6d\x74\137\x61\x63\x74\151\x76\x65"] = $smt; goto svtVF; UHenn: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto fg54X; OW2ky: $data["\x6b\145\154\x61\163"] = $kelass; goto YAG2Y; NRkIs: $data["\160\x65\156\x67\x61\167\x61\163"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt); goto rGgE5; w_p2c: bRIEv: goto rV97O; tmVFx: $data["\x72\x75\x61\156\147\x73"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []); goto NRkIs; Cy07F: $data["\x73\145\163\151"] = $this->dropdown->getAllSesi(); goto WrEOM; jbb4J: $setting = $this->dashboard->getSetting(); goto JQEvx; Lxa0l: $data["\147\x75\162\x75\x73"] = $this->dropdown->getAllGuru(); goto UHenn; l0wxf: $data["\x6a\x65\x6e\151\x73\x5f\x73\145\154\145\x63\164\145\144"] = $jenis_selected; goto K3i9a; d2u6W: $data["\x72\x75\141\x6e\147"] = $this->dropdown->getAllRuang(); goto Cy07F; ZDLWo: if (!(count($id_jenis) > 0)) { goto monCj; } goto ysfqR; c1WkK: goto brLfR; goto rIJur; VBl2f: $data["\x74\x70"] = $this->dashboard->getTahun(); goto wz9ne; sE4ZT: $tglJadwals = $this->cbt->getAllJadwalByJenis($jenis_selected, $tp->id_tp, $smt->id_smt); goto qh8b2; T9lGk: monCj: goto VlVA1; rV97O: $data["\x74\x67\154\137\152\141\x64\x77\141\154\163"] = $tglJadwals; goto d2u6W; WrEOM: $data["\x72\165\141\156\147\137\163\145\163\151"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt); goto tmVFx; T4cV4: brLfR: goto t62X9; jzXj2: $data["\x6a\x65\156\x69\163"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto T4cV4; qh8b2: foreach ($tglJadwals as $tgl => $jadwalss) { goto x85IN; x85IN: foreach ($jadwalss as $mpl => $jadwals) { goto Gem2t; kJZLo: MeZ0u: goto Ollny; HcLzs: GoX2w: goto kJZLo; Gem2t: foreach ($jadwals as $jadwal) { goto BP20v; BP20v: $jadwal->bank_kelas = unserialize($jadwal->bank_kelas); goto RyKn4; KykhC: fH40n: goto MKEHA; RyKn4: foreach ($jadwal->bank_kelas as $kb) { goto CTY4D; xVihg: $jadwal->peserta[] = $klss; goto xJEaJ; xJEaJ: wcEfT: goto S9lsP; S9lsP: bf9yt: goto QrovA; EobR3: $klss = $this->cbt->getKelasUjian($kb["\x6b\x65\154\141\x73\x5f\151\x64"]); goto xVihg; CTY4D: if (!($kb["\153\145\x6c\141\163\137\x69\144"] != '')) { goto wcEfT; } goto EobR3; QrovA: } goto KykhC; MKEHA: XHeMQ: goto G1HrL; G1HrL: } goto HcLzs; Ollny: } goto fJTlV; fJTlV: h58mL: goto i8YoA; i8YoA: hgptR: goto surN6; surN6: } goto eXs3K; svtVF: $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto OW2ky; z1bi3: $this->load->view("\137\x74\x65\155\x70\x6c\141\x74\145\x73\x2f\x64\141\x73\x68\x62\x6f\141\162\x64\x2f\137\x66\x6f\157\164\145\x72"); goto lqJp5; YAG2Y: $data["\x70\x72\157\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto Lxa0l; ysfqR: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); D9Kc3: } goto AVJVT; lqJp5: } public function savePengawas() { goto DFoEv; J6Zq1: $data["\x65\x72\x72\x6f\162"] = "\55\x2d"; goto pgQ5j; c6_MU: $updated = 0; goto GlQer; Hurg1: $id_smt = $smt->id_smt; goto c6_MU; X6cgU: TDRPT: goto J6Zq1; xx2ha: $id_tp = $tp->id_tp; goto Hurg1; ujbyS: $smt = $this->dashboard->getSemesterActive(); goto xx2ha; DFoEv: $input = json_decode($this->input->post("\144\x61\164\141", true)); goto ERC68; cryWB: $this->output_json($data); goto kIOIt; GlQer: foreach ($input as $d) { goto JTPwi; ZkuJH: $updated++; goto Jzqgd; wALLM: L_5KK: goto Guiaq; iE4wI: $id_pengawas = $id_tp . $id_smt . $jadwal . $ruang . $sesi; goto QbuQp; eOwzj: $sesi = $d->sesi; goto D70df; D70df: $jadwal = $d->jadwal; goto iE4wI; sYK5I: $update = $this->db->replace("\143\142\x74\x5f\x70\145\x6e\x67\141\x77\x61\163", $dataInsert); goto X4U8o; Jzqgd: tB_n_: goto wALLM; X4U8o: if (!$update) { goto tB_n_; } goto ZkuJH; QbuQp: $dataInsert = ["\151\144\137\160\145\x6e\147\141\x77\x61\x73" => $id_pengawas, "\151\144\137\152\141\144\x77\x61\x6c" => $jadwal, "\x69\x64\137\x74\160" => $id_tp, "\151\144\137\163\x6d\x74" => $id_smt, "\151\x64\x5f\162\165\x61\156\147" => $ruang, "\x69\x64\137\x73\145\163\151" => $sesi, "\x69\x64\x5f\x67\x75\x72\x75" => implode("\54", $d->guru)]; goto sYK5I; JTPwi: $ruang = $d->ruang; goto eOwzj; Guiaq: } goto X6cgU; ERC68: $tp = $this->dashboard->getTahunActive(); goto ujbyS; pgQ5j: $data["\163\x74\141\164\x75\163"] = $updated; goto cryWB; kIOIt: } }
