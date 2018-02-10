
plugin.tx_servicechargeextension_scinfo {
    view {
        # cat=plugin.tx_servicechargeextension_scinfo/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:servicechargeextension/Resources/Private/Templates/
        # cat=plugin.tx_servicechargeextension_scinfo/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:servicechargeextension/Resources/Private/Partials/
        # cat=plugin.tx_servicechargeextension_scinfo/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:servicechargeextension/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_servicechargeextension_scinfo//a; type=string; label=Default storage PID
        storagePid =
    }
}
