    <div class="secao-calculadora" id="secao-calculadora" style="display:none;">
        <div class="secao-calculadora-in">
            <h1>Calculadora</h1>
            <br>
            <div class="calculadora">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input_qtd_adultos">Quantidade de Adultos:</label>
                        <input type="number" class="form-control" id="input_qtd_adultos" value="5">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input_qtd_criancas">Quantidade de Crianças:</label>
                        <input type="number" class="form-control" id="input_qtd_criancas" value="1">
                    </div>
                </div>
                
                    <div class="escolhas-principais">
                        <div class="escolha-tipo">
                            <div class="header-escolha">Tipo</div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Tipo" id="Tipo1">
                                    <label class="custom-control-label" for="Tipo1">Aniversário</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Tipo" id="Tipo2">
                                    <label class="custom-control-label" for="Tipo2">Churrasco</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Tipo" id="Tipo3">
                                    <label class="custom-control-label" for="Tipo3">Casamento</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Tipo" id="Tipo4">
                                    <label class="custom-control-label" for="Tipo4">15 Anos</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Tipo" id="Tipo5">
                                    <label class="custom-control-label" for="Tipo5">Bodas</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Tipo" id="Tipo6">
                                    <label class="custom-control-label" for="Tipo6">Chá de Panela</label>
                                </div>
                            </div>

                        </div>

                        <div class="escolha-local">
                            <div class="header-escolha">Local</div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Local" id="Local1">
                                    <label class="custom-control-label" for="Local1">Residencial</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Local" id="Local2">
                                    <label class="custom-control-label" for="Local2">Alugado</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio radio-lg">
                                    <input class="custom-control-input" type="radio" name="Local" id="Local3">
                                    <label class="custom-control-label" for="Local3">Buffet</label>
                                </div>
                            </div>
                        </div>

                        <div class="escolha-tipos-bebidas">
                            <div class="header-escolha">Bebidas</div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" id="Bebida1">
                                    <label class="custom-control-label" for="Bebida1">Alcoólicas</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" id="Bebida2">
                                    <label class="custom-control-label" for="Bebida2">Não Alcoólicas</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" id="Bebida3">
                                    <label class="custom-control-label" for="Bebida3">Destilados</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="escolhas-bebidas">
                        <div class="escolha-bebida-alcoolica" id="escolha-bebida-alcoolica" style="display: none;">
                            <div class="header-escolha">Alcoólicas</div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-cerveja"  onclick="SelecionarBebida('cerveja')">
                                    <label class="custom-control-label" for="checkbox-cerveja">Cerveja</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-vinho" onclick="SelecionarBebida('vinho')">
                                    <label class="custom-control-label" for="checkbox-vinho">Vinho</label>
                                </div>
                            </div>
                        </div>

                        <div class="escolha-bebida-nao-alcoolica" id="escolha-bebida-nao-alcoolica" style="display: none;">
                            <div class="header-escolha">Não Alcoólicas</div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-agua" onclick="SelecionarBebida('agua')">
                                    <label class="custom-control-label" for="checkbox-agua">Água</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-refrigerante" onclick="SelecionarBebida('refrigerante')">
                                    <label class="custom-control-label" for="checkbox-refrigerante">Refrigerante</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-suco" onclick="SelecionarBebida('suco')">
                                    <label class="custom-control-label" for="checkbox-suco">Suco</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-cha" onclick="SelecionarBebida('cha')">
                                    <label class="custom-control-label" for="checkbox-cha">Chá</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-energetico" onclick="SelecionarBebida('energetico')">
                                    <label class="custom-control-label" for="checkbox-energetico">Energético</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-tonico" onclick="SelecionarBebida('tonico')">
                                    <label class="custom-control-label" for="checkbox-tonico">Tônico</label>
                                </div>
                            </div>
                        </div>

                        <div class="escolha-bebida-destilada" id="escolha-bebida-destilada" style="display: none;">
                            <div class="header-escolha">Destiladas</div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-whisky" onclick="SelecionarBebida('whisky')">
                                    <label class="custom-control-label" for="checkbox-whisky">Whisky</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-vodka" onclick="SelecionarBebida('vodka')">
                                    <label class="custom-control-label" for="checkbox-vodka">Vodka</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-sake" onclick="SelecionarBebida('sake')">
                                    <label class="custom-control-label" for="checkbox-sake">Sake</label>
                                </div>
                            </div>
                            <div class="custom-control-container">
                                <div class="custom-control custom-radio checkbox-lg">
                                    <input class="custom-control-input" type="checkbox" name="Local" id="checkbox-gin" onclick="SelecionarBebida('gin')">
                                    <label class="custom-control-label" for="checkbox-gin">Gin</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="resultados-container">
                        <div class="resultados">
                            <div class="header-escolha">Resultados</div>
                            <div class="linha-resultado" id="resultado-cerveja">
                                <input type="hidden" id="qtd-cerveja" name="qtd-cerveja" value="1/4">
                                <th scope="row">
                                    <span class="material-symbols-outlined">sports_bar</span>                        
                                </th>
                                <td>Cerveja (latinha) <span class="span-qtd-bebida" id="span-qtd-bebida-cerveja"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-vinho" style="display:none;">
                                <input type="hidden" id="qtd-vinho" name="qtd-vinho" value="4">
                                <th scope="row">
                                    <span class="material-symbols-outlined">wine_bar</span>
                                </th>
                                <td>Vinho (garrafa) <span class="span-qtd-bebida" id="span-qtd-bebida-vinho"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-agua" style="display:none;">
                                <input type="hidden" id="qtd-agua" name="qtd-agua" value="4">
                                <th scope="row">
                                    <span class="material-symbols-outlined">water_drop</span>
                                </th>
                                <td>Água (garrafa 2 litros) <span class="span-qtd-bebida" id="span-qtd-bebida-agua"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-refrigerante" style="display:none;">
                                <input type="hidden" id="qtd-refrigerante" name="qtd-refrigerante" value="4">
                                <th scope="row">
                                    <span class="material-symbols-outlined">local_drink</span>
                                </th>
                                <td>Refrigerante (garrafa 2 litros) <span class="span-qtd-bebida" id="span-qtd-bebida-refrigerante"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-suco" style="display:none;">
                                <input type="hidden" id="qtd-suco" name="qtd-suco" value="1">
                                <th scope="row">
                                    <span class="material-symbols-outlined">blender</span>
                                </th>
                                <td>Suco (copo) <span class="span-qtd-bebida" id="span-qtd-bebida-suco"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-cha" style="display:none;">
                                <input type="hidden" id="qtd-cha" name="qtd-cha" value="1">
                                <th scope="row">
                                    <span class="material-symbols-outlined">emoji_food_beverage</span>
                                </th>
                                <td>Chá (copo) <span class="span-qtd-bebida" id="span-qtd-bebida-cha"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-energetico" style="display:none;">
                                <input type="hidden" id="qtd-energetico" name="qtd-energetico" value="1">
                                <th scope="row">
                                    <span class="material-symbols-outlined">local_drink</span>
                                </th>
                                <td>Energético (latinha) <span class="span-qtd-bebida" id="span-qtd-bebida-energetico"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-tonico" style="display:none;">
                                <input type="hidden" id="qtd-tonico" name="qtd-tonico" value="5">
                                <th scope="row">
                                    <span class="material-symbols-outlined">local_drink</span>
                                </th>
                                <td>Tônico (garrafa) <span class="span-qtd-bebida" id="span-qtd-bebida-tonico"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-whisky" style="display:none;">
                                <input type="hidden" id="qtd-whisky" name="qtd-whisky" value="10">
                                <th scope="row">
                                    <span class="material-symbols-outlined">liquor</span>
                                </th>
                                <td>Whisky (garrafa) <span class="span-qtd-bebida" id="span-qtd-bebida-whisky"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-vodka" style="display:none;">
                                <input type="hidden" id="qtd-vodka" name="qtd-vodka" value="3">
                                <th scope="row">
                                    <span class="material-symbols-outlined">liquor</span>
                                </th>
                                <td>Vodka (garrafa) <span class="span-qtd-bebida" id="span-qtd-bebida-vodka"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-sake" style="display:none;">
                                <input type="hidden" id="qtd-sake" name="qtd-sake" value="5">
                                <th scope="row">
                                    <span class="material-symbols-outlined">liquor</span>
                                </th>
                                <td>Sake (garrafa) <span class="span-qtd-bebida" id="span-qtd-bebida-sake"></span></td>
                            </div>
                            <div class="linha-resultado" id="resultado-gin" style="display:none;">
                                <input type="hidden" id="qtd-gin" name="qtd-gin" value="5">
                                <th scope="row">
                                    <span class="material-symbols-outlined">liquor</span>
                                </th>
                                <td>Gin (garrafa) <span class="span-qtd-bebida" id="span-qtd-bebida-gin"></span></td>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="contato-formulario-calculadora" id="contato-formulario-calculadora">
                <div class="row-calculadora">
                    <div class="col2-calculadora col-left-calculadora">
                        <input type="text" id="name" placeholder="Nome"/> 
                    </div>
                    <div class="col2-calculadora col-right-calculadora">
                        <input type="text" id="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row-calculadora">
                    <div class="col-calculadora">
                        <input type="text" id="phone" placeholder="Telefone"/> 
                    </div>
                </div>
                <div class="row-calculadora">
                    <div class="col-calculadora">
                        <textarea id="text" placeholder="Digite sua mensagem aqui..."></textarea>
                    </div>
                </div>
                <div class="row-calculadora">
                    <div class="col-calculadora">
                        <input type="submit" id="submit" value="Enviar" onclick="envioFormularioCalculadora()" /> 
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="javascript/calculadora.js"></script>